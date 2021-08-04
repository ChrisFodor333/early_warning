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
        Session::put('from',$from);
        Session::put('to',$to);

        if(session()->has('admin')) {
            return view('admin/filter/filteredbasictable',['from' => $from, 'to' => $to]);
        } else {
            return view('admin/login');
        }
    } else {
        return view('admin/login');
    }
  }

  public function filtercomplex(Request $request)
    {
      if(session()->has('admin')) {
        $from = request()->get('from');
        $to = request()->get('to');
        //$to = new DateTime($to);
        //$to->modify('+1 day');
        $date = strtotime($to . ' +1 day');
        $to =  date('Y-m-d', $date);
        Session::put('from',$from);
        Session::put('to',$to);

        if(session()->has('admin')) {
            return view('admin/filter/filteredcomplextable',['from' => $from, 'to' => $to]);
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


  public function complexajax()
    {

        $from = session()->get('from');
        $to = session()->get('to');
        $complex = Complex::select('*')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to]);
        return Datatables::of($complex)
        ->addColumn('date', function ($row) {
            return substr($row->created_at->format('d/m/Y'),0,10);
        })
        ->addColumn('overview', function($row) {
            return '<a  href="'. url('/pro-admin/'). '/overviewcomplex/'. $row->id_complex .'" class="mybutton">Overview</a>';
        })
        ->addColumn('delete', function ($row) {
            return '<a href="'. url('/pro-admin/'). '/deletecomplex/'. $row->id_complex .'" class="mybutton">Delete</a>';
        })
        ->rawColumns(['delete' => 'delete','overview' => 'overview'])
        ->make(true);
  }

  public function filteredchart()
    {
      if(session()->has('admin')) {

          $from = request()->get('from');
          $to = request()->get('to');
          $date = strtotime($to . ' +1 day');
          $to =  date('Y-m-d', $date);

          $chart = Lava::DataTable();
          $basic_nodistress = DB::table('basic')->where('result','LIKE','No %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();
          $basic_distress = DB::table('basic')->where('result','LIKE','% Degree %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();

          $total = DB::table('basic')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();

          $basic_first_degree= DB::table('basic')->where('result','LIKE','First %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();
          $basic_second_degree= DB::table('basic')->where('result','LIKE','Second %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();
          $basic_third_degree= DB::table('basic')->where('result','LIKE','Third %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();

          $chart->addStringColumn('Count')
                          ->addNumberColumn("No Financial Distress")
                          ->addNumberColumn("Financial Distress")
                          ->addRow(["", $basic_nodistress,   $basic_distress]);
          Lava::ColumnChart('Basic Model Results', $chart, [
              'title' => 'Basic Model Results',
              'backgroundColor' => 'white',
              'color' => 'white',
              'colors' => ['green', 'red'],
              'legend' => [
                  'position' => 'bottom'
              ],
          ]);

          $donut = Lava::DataTable();
          $donut->addStringColumn('Count')
                          ->addNumberColumn("No Financial Distress")
                          ->addNumberColumn("Financial Distress")
                          ->addRow(["No Distress",$basic_nodistress])
                          ->addRow(["Financial Distress",$basic_distress]);

          Lava::DonutChart('Basic Model Results in %', $donut, [
              'title' => 'Basic Model Results in %',
              'backgroundColor' => 'white',
              'color' => 'white',
              'colors' => ['green', 'red'],
              'legend' => [
                  'position' => 'bottom'
              ],
          ]);


          $donut2 = Lava::DataTable();
          $donut2->addStringColumn('Count')
                          ->addNumberColumn("No Financial Distress")
                          ->addNumberColumn("First Degree Financial Distress")
                          ->addNumberColumn("Second Degree Financial Distress")
                          ->addNumberColumn("Third Degree Financial Distress")
                          ->addRow(["No Distress",$basic_nodistress])
                          ->addRow(["First Degree Financial Distress",$basic_first_degree])
                          ->addRow(["Second Degree Financial Distress",$basic_second_degree])
                          ->addRow(["Third Degree Financial Distress",$basic_third_degree]);


          Lava::DonutChart('Basic Model Results in % (advanced)', $donut2, [
              'title' => 'Basic Model Results in % (advanced)',
              'backgroundColor' => 'white',
              'color' => 'white',
              'colors' => ['green', 'yellow', 'orange', 'red'],
              'legend' => [
                  'position' => 'bottom'
              ],
          ]);



            $chart2 = Lava::DataTable();

            $chart2->addStringColumn('Count')
                            ->addNumberColumn("No Financial Distress")
                            ->addNumberColumn("First Degree Financial Distress")
                            ->addNumberColumn("Second Degree Financial Distress")
                            ->addNumberColumn("Third Degree Financial Distress")
                            ->addRow(["", $basic_nodistress, $basic_first_degree, $basic_second_degree, $basic_third_degree]);
            Lava::ColumnChart('Basic Model Results 2', $chart2, [
                'title' => 'Basic Model Results (Advanced)',
                'backgroundColor' => 'white',
                'color' => 'white',
                'colors' => ['green', 'yellow', 'orange', 'red'],
                'legend' => [
                    'position' => 'bottom'
                ],
            ]);







            $chartcomplex = Lava::DataTable();
            $complex_nodistress = DB::table('complex')->where('result1','LIKE','No %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();
            $complex_distress = DB::table('complex')->where('result1','LIKE','% Degree %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();


            $totalcomplex = DB::table('complex')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();

            $complex_first_degree= DB::table('complex')->where('result1','LIKE','First %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();
            $complex_second_degree= DB::table('complex')->where('result1','LIKE','Second %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();
            $complex_third_degree= DB::table('complex')->where('result1','LIKE','Third %')->whereRaw("created_at >= ? AND created_at < ?",[$from, $to])->count();

            $chartcomplex->addStringColumn('Count')
                            ->addNumberColumn("No Financial Distress")
                            ->addNumberColumn("Financial Distress")
                            ->addRow(["", $complex_nodistress,   $complex_distress]);
            Lava::ColumnChart('Complex Model Results', $chartcomplex, [
                'title' => 'Complex Model Results',
                'backgroundColor' => 'white',
                'color' => 'white',
                'colors' => ['green', 'red'],
                'legend' => [
                    'position' => 'bottom'
                ],
            ]);

            $donutcomplex = Lava::DataTable();
            $donutcomplex->addStringColumn('Count')
                            ->addNumberColumn("No Financial Distress")
                            ->addNumberColumn("Financial Distress")
                            ->addRow(["No Distress",$complex_nodistress])
                            ->addRow(["Financial Distress",$complex_distress]);

            Lava::DonutChart('Complex Model Results in %', $donutcomplex, [
                'title' => 'Complex Model Results in %',
                'backgroundColor' => 'white',
                'color' => 'white',
                'colors' => ['green', 'red'],
                'legend' => [
                    'position' => 'bottom'
                ],
            ]);


            $donut2complex = Lava::DataTable();
            $donut2complex->addStringColumn('Count')
                            ->addNumberColumn("No Financial Distress")
                            ->addNumberColumn("First Degree Financial Distress")
                            ->addNumberColumn("Second Degree Financial Distress")
                            ->addNumberColumn("Third Degree Financial Distress")
                            ->addRow(["No Distress",$complex_nodistress])
                            ->addRow(["First Degree Financial Distress",$complex_first_degree])
                            ->addRow(["Second Degree Financial Distress",$complex_second_degree])
                            ->addRow(["Third Degree Financial Distress",$complex_third_degree]);


            Lava::DonutChart('Complex Model Results in % (advanced)', $donut2complex, [
                'title' => 'Complex Model Results in % (advanced)',
                'backgroundColor' => 'white',
                'color' => 'white',
                'colors' => ['green', 'yellow', 'orange', 'red'],
                'legend' => [
                    'position' => 'bottom'
                ],
            ]);



              $chart2complex = Lava::DataTable();

              $chart2complex->addStringColumn('Count')
                              ->addNumberColumn("No Financial Distress")
                              ->addNumberColumn("First Degree Financial Distress")
                              ->addNumberColumn("Second Degree Financial Distress")
                              ->addNumberColumn("Third Degree Financial Distress")
                              ->addRow(["", $complex_nodistress, $complex_first_degree, $complex_second_degree, $complex_third_degree]);
              Lava::ColumnChart('Complex Model Results 2', $chart2complex, [
                  'title' => 'Complex Model Results (Advanced)',
                  'backgroundColor' => 'white',
                  'color' => 'white',
                  'colors' => ['green', 'yellow', 'orange', 'red'],
                  'legend' => [
                      'position' => 'bottom'
                  ],
              ]);
          return view('admin/charts');
      } else {
          return view('admin/login');
      }
    }



}
