<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\horoscope_signs;
use App\Models\user;
use App\Http\Controllers\Exception;
use Validator;
use Auth;

class UploadFile extends Controller
{
    

    public function uploadCSV(Request $request) {

        try {
        // recupero tutti i valori di riferimento per i segni zodiacali e l'enumerazione dei gionri
        $zodiac_signs = DB::table('horoscope_signs')->get();
        $enum_periods = DB::table('enum_periods')->get();
        

        // opzioni incremento indice tabella 
        $counterID = 0;
        $lastID = DB::table('horoscope_objects')->orderBy('Id', 'DESC')->limit(1)->get();
        if($lastID->count() > 0) {
            $counterID = $lastID[0]->Id;
        }




        // cancello tutte le righe che erano state inserite per la tabella 
        DB::table('horoscope_objects')->truncate();

        // inserimento delle righe 
        $content = file_get_contents($request->file); 
        $arrayContent = preg_split('/\n|\r\n?/', $content);
        $count = 0;
        foreach($arrayContent as $line) {
            
                    $counterID++;
                    $variable = explode(';', $line);

                    if(count($variable) > 1 and count($variable)<= 5) {
                        $date_var = date("Y-m-d", strtotime($variable[1]));  
                        $idPeriod = 0;
                        if($enum_periods->where('Description', '=',  $variable[0])->first() != null) {
                            $idPeriod = $enum_periods->where('Description', '=',  $variable[0])->first() -> Id;
                        }
                        else 
                        {
                            // messaggio errore 
                            $uploadFileResult = [
                            "result" => false, 
                            "message" => 'invalid format'
                            ];

                            session()->put('uploadFile_result', $uploadFileResult);

                            return redirect('/yourprofile');
                        }
                        if($zodiac_signs->where('Description', '=', $variable[2])->first() != null) {
                            $idSign = $zodiac_signs->where('Description', '=', $variable[2])->first()->Id;
                        }
                        else {
                            // messaggio errore
                            $uploadFileResult = [
                            "result" => false, 
                            "message" => 'invalid format'
                            ];

                            session()->put('uploadFile_result', $uploadFileResult);

                            return redirect('/yourprofile');
                        }
                        
                        
                        $description = $variable[3];

                        $query = DB::table('horoscope_objects') -> insert(

                            [
                                'Id' => $counterID,
                                'Period_ID' => $idPeriod,
                                'DatePrevision' => $date_var,
                                'Description_Prevision' => $description,
                                'Sign_ID' => $idSign,
                            ]
                            );
                    }

                
                
            
                }

            }
            // recupero eventuale messaggio di errore 
            catch(Exception $e) {
                
                $errMessage = $e->getMessage();
                $uploadFileResult = [
                "result" => false, 
                "message" => $errMessage
                ];

                session()->put('uploadFile_result', $uploadFileResult);

                return redirect('/yourprofile');

            }
        $uploadFileResult = [
            "loggedUser" => '',
            "result" => true, 
            "message" => 'File correctly upload!'
            
            ];

            session()->put('uploadFile_result', $uploadFileResult);

            return redirect('/yourprofile');
    }
}
