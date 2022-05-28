<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    
    public function index() {
        return View('welcome');
    }


    public function checkLogin(Request $request) {
      

        $users = DB::table('users')
        ->where('Email','=', $request-> email)
        ->where('Password', '=', $request-> password)
        ->limit(1)->get();

        if($users->count() == 0) {
            $errorMsg = 'please select valid Email or Password';
            return View('login')->with('errorMsg', $errorMsg);
        }
        else {

            $uploadFileResult = [];
            $visualizzazione_giornaliera = null;
            $visualizzazione_settimanale = null;
            $visualizzazione_mensile = null;

            foreach($users as $user) {

                // inizializzazione di tutti i parametri di sessione 
                session()->put('loggedUser', $user);
                session()->put('uploadFile_result', $uploadFileResult);
               

                // inizializzazione delle diverse visualizzazioni disponibili
                session()->put('visualizzazione_giornaliera', $visualizzazione_giornaliera);
                session()->put('visualizzazione_settimanale', $visualizzazione_settimanale);
                session()->put('visualizzazione_mensile', $visualizzazione_mensile);
                

                if($user->SubscriptionType_ID == 1 or $user->SubscriptionType_ID == 2) {


                    // recupero tutti i valori di riferimento per i segni zodiacali e l'enumerazione dei gionri
                    $zodiac_signs = DB::table('horoscope_signs')->get();
                    $enum_periods = DB::table('enum_periods')->get();

                    // recupero degli ID per i diversi periodi previsti 
                    $idDay = 0;
                    $idMonth = 0;
                    $idWeek = 0;
                    foreach($enum_periods as $enum_period) {
                    if($enum_period -> Description == 'Giorno') {
                        $idDay = $enum_period -> Id;
                        continue;
                    }
                    if($enum_period -> Description == 'Mese') {
                        $idMonth = $enum_period -> Id;
                        continue;
                    }
                    if($enum_period -> Description == 'Settimana') {
                        $idWeek = $enum_period -> Id;
                        continue;
                    }

                    }
                    



                    // recupero delle descrizioni per ognuno dei valori degli oggetti disponibili
                    $objects_zodiac_descriptions = DB::table('horoscope_objects')-> orderBy('DatePrevision', 'DESC')->get();


                    // calcolo della descrizione per il segno zodiacale giornaliero
                    // recupero del segno zodiacale per l'utente corrente 
                    foreach($zodiac_signs as $zodiac_sign) {
                        
                        // prendo giorno e mese di partenza e di arrivo per il segno zodiacale
                        $parts_init = explode('-', $zodiac_sign->Start_Date);
                        $month_init = $parts_init[1];
                        $day_init = $parts_init[2];
                        $parts_end = explode('-', $zodiac_sign->End_Date);
                        $month_end = $parts_end[1];
                        $day_end = $parts_end[2];

                        // prendo giorno e mese di nascita dell'utente 
                        $parts_user = explode('-', $user->Birthday);
                        $month_usr = $parts_user[1];
                        $day_usr = $parts_user[2];


                        // confronto per il segno zodiacale corrente 
                        if(
                        ($month_usr == $month_init and 
                        $day_usr > $day_init) or 
                        (
                            $month_usr == $month_end and 
                            $day_usr < $day_end
                        )
                        ) {
                            $idSign = $zodiac_sign -> Id;
                            $descrSign = $zodiac_sign -> Description;



                            $dailyHor_Real = [];
                            // visualizzazione giornaliera
                            $dailyHor = $objects_zodiac_descriptions 
                            -> Where('Sign_ID', '=', $idSign)
                            -> Where('Period_ID', '=', $idDay);
                           

                            $dailyHor_Real['Sign'] = $descrSign;
                            $dailyHor_Real['Value'] = $dailyHor;


                            session()->put('visualizzazione_giornaliera', $dailyHor_Real);
                            


                            // risultati temporanei per i valori settimanali conservati in DB
                            $weekHor_TMPs = $objects_zodiac_descriptions 
                            -> Where('Period_ID', '=', $idWeek);
                            // inizializzazione dell'insieme di dati da visualizzare settimanalmente nel contesto
                            $weekHor_Real = [];
                            foreach($zodiac_signs as $zodiac_sign_1) {

                                $weekHor_Real[$zodiac_sign_1 -> Description] = null;
                            }
                            // scremo rispetto a risultati multipli per i diversi segni 
                            foreach($weekHor_TMPs as $weekHor_TMP) {

                                $zodiac_name = $zodiac_signs->Where('Id', '=', $weekHor_TMP->Sign_ID)->First()->Description;
                                // prima e unica inizializzazione per l'oggetto da inserire per il segno corrente 
                                // questo mi serve per non avere valori ripetuti di ritorno 
                                if($weekHor_Real[$zodiac_name] == null) {
                                    $weekHor_Real[$zodiac_name] = $weekHor_TMP;
                                }
                            }
                            session()->put('visualizzazione_settimanale', $weekHor_Real);


                            if($user->SubscriptionType_ID == 2) {
                            // visualizzazione mensile 
                            $monthHor_TMPs = $objects_zodiac_descriptions 
                            -> Where('Period_ID', '=', $idMonth);
                            // inizializzazione dell'insieme di dati da visualizzare settimanalmente nel contesto
                            $monthHor_Real = [];

                            foreach($zodiac_signs as $zodiac_sign_1) {

                                $monthHor_Real[$zodiac_sign_1 -> Description] = null;
                            }
                            foreach($monthHor_TMPs as $monthHor_TMP) {

                                $zodiac_name = $zodiac_signs->Where('Id', '=', $monthHor_TMP->Sign_ID)->First()->Description;
                                // prima e unica inizializzazione per l'oggetto da inserire per il segno corrente 
                                // questo mi serve per non avere valori ripetuti di ritorno 
                                if($monthHor_Real[$zodiac_name] == null) {
                                    $monthHor_Real[$zodiac_name] = $monthHor_TMP;
                                }
                            }
                            session()->put('visualizzazione_mensile', $monthHor_Real);
                            
                            }


                           

                            
                        }

                    }

                }


                return View('yourprofile');
            }
            
        }

    }


    public function successLogin() {
        return view('yourprofile');
    }

}
