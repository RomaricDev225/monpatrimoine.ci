<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use App\Mail\restPasswordMails;

class restPasswordMailController extends Controller
{
    public function resetPassword($adresseMail)
    {
        $data = [
            'subject' => 'Monpatrimoine.ci',
            'body' => 'Reinitilaisation mot de passe'
        ];
        try {
            Mail::to($adresseMail)->send(new restPasswordMails ($data));
            return 'success';
        } catch (Exception $th) {
            return $th . "Une erreur s'est produite lors du traitement !";

        }
    }
}
