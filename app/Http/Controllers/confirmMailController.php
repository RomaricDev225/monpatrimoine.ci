<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use App\Mail\confirmationMail;

class confirmMailController extends Controller
{
    public function threadSendMail($adresseMail)
    {
        $data = [
            'subject' => 'Monpatrimoine.ci',
            'body' => 'Code de Vérification'
        ];
        try {
            Mail::to($adresseMail)->send(new confirmationMail ($data));
            return 'success';
        } catch (Exception $th) {
            return $th . "Une erreur s'est produite lors du traitement !";

        }
    }

    // public function setSessionVariable(Request $req, $valeur)
    // {
    //     $val = $req-> $valeur;
    //     Session::put('publicVariable', $val);
    //     session()->save();
    //     $value = Session::get('publicVariable');
    //     return $value;
    // }
}
