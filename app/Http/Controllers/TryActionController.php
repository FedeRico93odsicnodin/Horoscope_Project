<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TryActionController extends Controller
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



    public function tryAction(Request $request) {

        
        // dichiarazione della variabile di ritorno 
        $varRetDayH = [];
        $varRetDayH['displayInfo'] = false;
        $varRetDayH['Sign'] = '';
        $varRetDayH['Content'] = null;



        $enum_periods = DB::table('enum_periods')->get();

                    // recupero degli ID per i diversi periodi previsti 
                    $idDay = 0;
                    foreach($enum_periods as $enum_period) {
                    if($enum_period -> Description == 'Giorno') {
                        $idDay = $enum_period -> Id;
                        continue;
                    }

                    }

        // recupero tutti i valori di riferimento per i segni zodiacali e l'enumerazione dei gionri
        $zodiac_signs = DB::table('horoscope_signs')->get();

        $sign_ID = 0;

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
                        $parts_user = explode('-', $request->dateTryAttempt);
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

                            // ho trovato il segno zodiacale: quindi vado a prendere la definizione giornaliera tra quelle elencate 
                            // recupero delle descrizioni per ognuno dei valori degli oggetti disponibili: prendo già gli oggetti giornalieri
                            $objects_zodiac_descriptions = DB::table('horoscope_objects')
                            -> orderBy('DatePrevision', 'DESC')
                            -> where('Period_ID', '=', $idDay)
                            -> where('Sign_ID', '=', $zodiac_sign -> Id)
                            ->get()->First();

                            // validazione informazioni
                            if($objects_zodiac_descriptions == null) {
                                $varRetDayH['displayInfo'] = false;
                                $varRetDayH['Sign'] = '';
                                $varRetDayH['Content'] = null;
                            }
                            else {

                                $varRetDayH['displayInfo'] = true;
                                $varRetDayH['Sign'] = $zodiac_sign -> Description;
                                $varRetDayH['Content'] = $objects_zodiac_descriptions;
                            }


                        }}
        
        


       


        return View('attempt_horoscope') -> with('DailySign', $varRetDayH);;

    }
}
