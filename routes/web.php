<?php

use Illuminate\Support\Facades\Route;
use app\Mail\MessageMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/connexion', function () {
    return view('connexion');
});


Route::get('/inscription', function () {
    return view('inscription');
});


Route::get('/mon-compte', function () {
    return view('mon-compte');
});

Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/declaration-de-bien', function () {
    return view('declaration-de-bien');
});

Route::get('/recevoir-un-bien', function () {
    return view('declaration-de-bien');
});

Route::get('/transferer-un-bien', function () {
    return view('declaration-de-bien');
});

Route::get('/declaration-de-perte', function () {
    return view('declaration-de-perte');
});




Route::get('/declaration-de-bien/{categorie}', function () {
    return view('declaration-de-bien-menu');
});

Route::get('/declaration-de-bien/{categorie}/{materiel}', function () {
    return view('declaration-de-bien-materiel');
});



Route::get('/page-mail', function () {
    return view('mails.confirmation_mail');
});



Route::get('/verification-inscription/{adresseMail}', [App\Http\Controllers\confirmMailController::class, 'threadSendMail']);
Route::get('/reset-password/{adresseMail}', [App\Http\Controllers\restPasswordMailController::class, 'resetPassword']);


Route::get('/formulaire/{categorie}', function(){
    if(str_contains(url()->current(), '/formulaire/telephone')){
        return view('formulaires.telephone');
    } else if(str_contains(url()->current(), '/formulaire/tablette')){
        return view('formulaires.tablette');
    }
    else if(str_contains(url()->current(), '/formulaire/moniteur')){
        return view('formulaires.moniteur');
    }
    else if(str_contains(url()->current(), '/formulaire/television')){
        return view('formulaires.television');
    }
    else if(str_contains(url()->current(), '/formulaire/copieur')){
        return view('formulaires.copieur');
    }
    else if(str_contains(url()->current(), '/formulaire/imprimante')){
        return view('formulaires.imprimante');
    }
    else if(str_contains(url()->current(), '/formulaire/moto')){
        return view('formulaires.moto');
    }
    else if(str_contains(url()->current(), '/formulaire/voiture')){
        return view('formulaires.voiture');
    }
    else if(str_contains(url()->current(), '/formulaire/audio')){
        return view('formulaires.audio');
    }
    else if(str_contains(url()->current(), '/formulaire/unite_centrale')){
        return view('formulaires.unite_centrale');
    }
    else {
        return view('formulaires.pc_portable');
    }
    
    
});




