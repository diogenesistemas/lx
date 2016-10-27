<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class EmailController extends Controller
{
    private $mail;

    public function __construct(Mail $mail){
    	$this->mail = $mail;

    }

    public function sendMail(){

    	// return "oi";
 
    	// $this->mail->send(null, [], function ($m) {
    	// 	$m->to("ads.diogenes@gmail.com", "Esse é um teste de envio de email");
    	// });
        Mail::send('mail.mensagem-email', [], function ($message) {    	   

            $message->to("ads.diogenes@gmail.com", "Teste")->subject('Teste Email');
            $message->attach('C:\Users\Diogenes\Desktop\Felicidade.docx', ['as' => 'testelx', 'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']);
            
        });
        return "enviado";
    }
}


 // Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
 //            $m->from('hello@app.com', 'Your Application');

 //            $m->to($user->email, $user->name)->subject('Your Reminder!');
 //        });