<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){
      $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject'=> 'required',
            'content'=> 'required|min:3'
      ]);

      Mail::to('diazroglia@gmail.com')->queue(new MessageReceived($message));
    // Si lo quiero ver por pantalla
    //return new MessageReceived($message);

      return 'Mensaje Enviado...';
    }
}
