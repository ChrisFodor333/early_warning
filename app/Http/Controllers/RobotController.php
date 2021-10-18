<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Basic;
use App\Models\Basic_old;
use App\Models\Complex;
use App\Models\Complex_old;
use Requests;
use Redirect;
use DataTables;
use Validator;
use Session;
use Auth;
use DB;
use Lava;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;// or use GuzzleHttp\Client as GuzzleClient;


use Illuminate\Database\Eloquent\Model;

class RobotController extends Controller
{

  public function sendrobot(Request $request) {
        if($request->submit == "submit")
        {
            $rules = array(
                'file' => 'required'
            );


            $validator = Validator::make(Requests::all(), $rules);


            if ($validator->fails()) {
                return Redirect::to('/pro-admin/robot')
                    ->withErrors($validator);
            }
            else {
                // SEND THE ROBOT
                 if($request->hasFile('file')){
                   $filenameWithExt = $request->file('file')->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $request->file('file')->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    // Upload Image
                    $path = $request->file('file')->storeAs('public/csvs',$fileNameToStore);


                        /*
                        $filename = $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
                        $tempPath = $file->getRealPath();
                        $fileSize = $file->getSize(); //Get size of uploaded file in bytes
                        //Check for file extension and size
                        $this->checkUploadedFileProperties($extension, $fileSize);
                        //Where uploaded file will be stored on the server
                        $location = 'uploads'; //Created an "uploads" folder for that
                        // Upload file
                        $file->move($location, $filename);
                        // In case the uploaded file path is to be stored in the database
                        $filepath = public_path($location . "/" . $filename);
                        // Reading file
                        */
                        $file = fopen("storage/app/".$path, "r");
                        $importData_arr = array(); // Read through the file and store the contents as an array
                        $i = 0;
                        //Read the contents of the uploaded file
                        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                        $num = count($filedata);
                        // Skip first row (Remove below comment if you want to skip the first row)
                        if ($i == 0) {
                        $i++;
                        continue;
                        }
                        for ($c = 0; $c < $num; $c++) {
                        $importData_arr[$i][] = $filedata[$c];
                        }
                        $i++;
                        }
                        fclose($file); //Close after reading
                        $j = 0;
                        $ico_array = array();
                        $ico = "";

                        foreach ($importData_arr as $importData) {
                        $ico = $importData[5]; //Get ičo
                        array_push($ico_array, $ico);
                        $j++;
                        }
                        // CALL CRAWLER HERE FOR THE ICO_ARRAY
                        $client = new Client();
                        $result = "";
                        $crawler = $client->request('GET', 'https://www.registeruz.sk/cruz-public/domain/accountingentity/simplesearch');

                        $goutteClient = new Client(HttpClient::create(['timeout' => 60]));

                        $form = $crawler->filter('.mx-auto > form')->form();
                        $crawler = $client->submit($form, ['accountingEntityName' => $ico]);
                        $link = $crawler->selectLink('Detail')->link();
                        $crawler = $client->click($link);
                        $my_href = $crawler->filter('a[class="p-3 p-lg-0 my-lg-1 row align-items-center"]')->first()->link();
                        $crawler = $client->click($my_href);

                        // TO USE THE OTHER 2
                        $aktiva = $crawler->selectLink('Strana aktív')->link();
                        $crawler = $client->click($aktiva);
                        // tvalue_item text-right
                        $aktiva_array = array();
                        $i = 0;
                        $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$aktiva_array) {
                          if($node->text() == "") {

                            array_push($aktiva_array, "0");
                          }
                          else {
                              array_push($aktiva_array, $node->text());
                          }
                          });

                          $sorted_aktiva = array();
                          $i = 0;
                          foreach ($aktiva_array as $aktiva) {
                            if($i % 2 == 0) {
                            array_push($sorted_aktiva,$aktiva);
                            }
                            $i++;
                          }
                          //print $sorted_aktiva['20'];

                          $pasiva = $crawler->selectLink('Strana pasív')->link();
                          $crawler = $client->click($pasiva);
                          // tvalue_item text-right
                          $pasiva_array = array();
                          $i = 0;
                          $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$pasiva_array) {
                            if($node->text() == "") {
                              array_push($pasiva_array, "0");
                            }
                            else {
                                array_push($pasiva_array, $node->text());
                            }
                            });
                            $sorted_pasiva = array();
                            $i = 0;
                            foreach ($pasiva_array as $pasiva) {
                              if($i % 2 == 0) {
                              array_push($sorted_pasiva,$pasiva);
                              }
                              $i++;
                            }

                            print_r($sorted_pasiva);

                            $income_statement = $crawler->selectLink('Výkaz ziskov a strát')->link();
                            $crawler = $client->click($income_statement);
                            // tvalue_item text-right
                            $income_statement_array = array();
                            $i = 0;
                            $crawler->filter('td[class="tvalue_item text-right"]')->each(function ($node) use (&$income_statement_array) {
                              if($node->text() == "") {
                                array_push($income_statement_array, "0");
                              }
                              else {
                                  array_push($income_statement_array, $node->text());
                              }
                              });
                              $sorted_income_statement = array();
                              $i = 0;
                              foreach ($income_statement_array as $income_statement) {
                                if($i % 2 == 0) {
                                array_push($sorted_income_statement,$income_statement);
                                }
                                $i++;
                              }
                              //print_r($sorted_income_statement);
                              /*
                              $sorted_income_statement [0] = 1
                              $sorted_aktiva  [0] = 1
                              $sorted_pasiva [0] = 24
                              */

                              // ARRAY INDEXES TO INPUTS


                        //return Redirect::to('/pro-admin/robot')->with('status', "The robot completed it's process");


                 } else {
                   return Redirect::to('/pro-admin/robot')
                       ->with('status',  "Oops! Something went wrong");
                 }

               }

            } // IF SUBMITTED
          } // SEND ROBOT FUNCTION
} // class
