<?php


namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Basic;
use App\Models\Complex;
use Requests;
use Redirect;
use DataTables;
use Validator;
use Session;
use Auth;
use DB;
use Lava;
use DateTime;


class FilterController extends Controller
{
  public function filterbasic(Request $request)
    {
      if(session()->has('admin')) {
        $from = request()->get('from');
        $to = request()->get('to');
        //$to = new DateTime($to);
        //$to->modify('+1 day');
        $date = strtotime($to . ' +1 day');
        $to =  date('Y-m-d', $date);
        //dd/mm/yyyy


        Session::put('from',$from);
        Session::put('to',$to);

        //return 'Where created_at >'. $from . ' AND created_at <'. $to;

        if(session()->has('admin')) {
            return view('admin/filter/filteredbasictable',['from' => $from, 'to' => $to]);
        } else {
            return view('admin/login');
        }


    } else {
        return view('admin/login');
    }
  }





  public function basicajax()
    {

        $from = session()->get('from');
        $to = session()->get('to');




        $basic = Basic::select('*')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to]);
        return Datatables::of($basic)
        ->addColumn('date', function ($row) {
            return substr($row->created_at->format('d/m/Y'),0,10);
        })
        ->addColumn('overview', function($row) {
            return '<a  href="'. url('/pro-admin/'). '/overviewbasic/'. $row->id_basic .'" class="mybutton">Overview</a>';
        })
        ->addColumn('delete', function ($row) {
            return '<a href="'. url('/pro-admin/'). '/deletebasic/'. $row->id_basic .'" class="mybutton">Delete</a>';
        })
        ->rawColumns(['delete' => 'delete','overview' => 'overview'])
        ->make(true);



  }



}
