<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailControlller extends Controller
{


public function __invoke()
{
    return view ('mail');
}


public function EnviarMail(Request $request)
{
    Mail::send(['html'=>'plantillaMail'], $data=[
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'title' => $request->get('title'),
        'subject' => $request->get('subject')
    ],
        function ($message) use ($request) {
            $message->from($request->get('email'));
            $message->to('admin@gmail.com', $request->get('name'))
            ->subject('Mail prueba examen');
        }
        );
    
    
    
    
    return 'Se ha enviado el mail con exito';
}
}
