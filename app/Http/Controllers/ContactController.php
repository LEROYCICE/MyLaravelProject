<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact ;

class ContactController extends Controller
{   

    public function index(){
        $contacts = contact::all() ;
        return view('index',compact('contacts')) ;
    }

    public function create()
    {
       return view('welcome') ;
    }

    public function store(Request $request)
    {   
        request()->validate(
            [
                'nom'=>'required|max:40',
                'mail'=>'required|min:5',
                'sujet'=>'required|min:5',
                'message'=>'required|max:100'
            ]
        ) ;

        $contact = new Contact() ;
        $contact->nom = request('nom') ;
        $contact->mail = request('mail') ;
        $contact->sujet = request('sujet') ;
        $contact->message = request('message') ;
        $resultat = $contact->save();
        if($resultat){
            return back()->with('Bien','Votre message est bien envoyé !') ;
        }else{
            return back()->with('Echec','Votre message est en attente !') ;
        } 

       
    }

}
