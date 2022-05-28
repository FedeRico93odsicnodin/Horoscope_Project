<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
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


    public function subscribe(Request $request) {

        // oggetto di ritorno 
        $response = [];
        $response['subscription_done'] = false;
        $response['with_err'] = false;
        $response['err'] = '';

        // validazione parametri di registrazione 
        if(
            $request->Name == null or 
            $request->Surname == null or 
            $request->BirthDate == null or 
            $request->Email == null or 
            $request->PhoneNumber == null or 
            $request->City == null or 
            $request->ZipCode == null or 
            $request->Country == null or 
            $request->Password == null 


        ) {

            $response['with_err'] = true;
            $response['err'] = 'missing parameters';


            return View('subscribe') -> with('response',  $response);
        }
        // salvataggio del nuovo utente 
        else {

            // decisione sul subscription typeid
            $counterID = 0;

            // recupero dell'ID per la tabella corrente 
            $lastID = DB::table('users')->orderBy('Id', 'DESC')->limit(1)->get();
            if($lastID->count() > 0) {
                $counterID = $lastID[0]->Id;
            }

            $counterID++;

            $query = DB::table('users') -> insert(

                [
                    'Id' => $counterID,
                    'Name' => $request->Name,
                    'Surname' => $request->Surname,
                    'Birthday' =>  $request->BirthDate,
                    'Gender_ID' => $request->gender,
                    'Email' =>  $request->Email,
                    'PhoneNum' => $request->PhoneNumber,
                    'City' =>  $request->City,
                    'ZipCode' => $request->ZipCode,
                    'Country' => $request->Country,
                    'SubscriptionType_ID' => $request->account_selection,
                    'Password' => $request->Password,
                ]
                );

                $response['with_err'] = false;
                $response['subscription_done'] = true;
                $response['err'] = 'subscription done!';
    
    
                return View('subscribe') -> with('response',  $response);
        }





    }
}
