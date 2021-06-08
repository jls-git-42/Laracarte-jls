<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use phpDocumentor\Reflection\Types\This;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use MercurySeries\Flashy\Flashy;

class ContactsController extends Controller
{
    public function create()
    {

        return view('/contacts/create');
    }

    public function store(ContactFormRequest $request)
    {
        // validation ici traitée par la classe ContactFormRequest 
        /*$rules = ['nom'=>'required|min:3',
                  'email'=>'required|email',
                  'message'=>'required|min:10'
                ];
        $messages = ['required'=>'Le Champs :attribute est requis',
                     'email'=>'adresse email non valide',
                     'min'=>'le champ :attribute doit comporter au moins :min caractères'
                ];*/

        //$this->validate($request,$rules,$messages);
        
        // nouvelle instance de message crée à partir du modèle message
        // pour sauvegarde du message en base Messages methode 1
        /*$message = new Message;
        $message->nom = $request->nom;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();*/

        // pour sauvegarde du message en base Messages methode 2
        /*$message = Message::create(['nom'=>$request->nom,
                                    'email'=>$request->email,
                                    'message' => $request->message
                                    ]);*/

        // pour sauvegarde du message en base Messages methode 3
        $message = Message::create($request->only('nom','email','message'));

        // pour envoyer l'email
        //$mailable = new ContactMessageCreated($request->nom,$request->email,$request->message);
        $mailable = new ContactMessageCreated($message);
        mail::to(config('laracarte.admin_support_email'))->send($mailable);
        Flashy::success('Nous avons recu votre message et vous répondrons au plus vite ...');

        return redirect::route('home_path');
    }
}
