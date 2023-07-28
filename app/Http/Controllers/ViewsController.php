<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ViewsController extends Controller
{
    public function home() {

        return view('home', array(
            'title' => 'Inicio'
        ));

    }

    public function nouLanding() {

        return view('nouLanding', array(
            'title' => 'Home'
        ));

    }


    public function nouAbout() {

        return view('nouAbout', array(
            'title' => 'About'
        ));

    }

    public function experience() {

        return view('experience', array(
            'title' => 'Experience'
        ));

    }

    public function formation() {

        return view('formation', array(
            'title' => 'Formation'
        ));

    }

    public function landing() {

        return view('landing', array(
            'title' => 'Inici'
        ));

    }

    public function welcome() {

        return view('welcome', array(
            'title' => 'Home'
        ));

    }
    
    public function about() {

        return view('about', array(
            'title' => 'About'
        ));

    }

    public function portfolio() {

        return view('portfolio', array(
            'title' => 'Projects'
        ));

    }

    public function contact() {

        return view('contact', array(
            'title' => 'Contact'
        ));

    }

    public function sendMail(Request $request) {

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
                'secret' => config('services.recaptcha.secret'),
                'response' => $request->get('recaptcha'),
                'remoteip' => $remoteip
            ];
        $options = [
                'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
                ]
            ];
        $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $resultJson = json_decode($result);
        if ($resultJson->success != true) {
                echo('error');
                }
        if ($resultJson->score >= 0.3) {

            $contacte = [
                'name' => $request->input('name'),
                'mail' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];
    
            Mail::send('email.contact', ['contacte' => $contacte], function ($m) use ($contacte) {
                $m->to('gabrielfrancobadalona@gmail.com')->subject('Has rebut un missatge');
            });
    
            Mail::send('email.confirmation', ['contacte' => $contacte], function ($m) use ($contacte) {
                $m->to($contacte['mail'])->subject('S\'ha enviat el teu missatge');
            });
    
            echo('success');

        } else {
         echo('error');
        }

    }

}
