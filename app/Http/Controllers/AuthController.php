<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth ;

class AuthController extends Controller
{
     public function AuthCreate(){
        return view('Auth') ;
     } 

     public function store()
     {   request()->validate( [
        'nom' => 'required' ,
        'passe' => 'required' ]
     ) ;

      $auth = new Auth() ;
      $nom =$auth->nom = request('nom') ;
      $passe =$auth->passe = request('passe') ;
      $auth->save() ;
      if($nom == 'KPOMBLAWOU' AND $passe== 'Leroy12@14'){
        return view('index') ;
    }else{
        return back()->with('Echec','Information incorrect !') ;
    } 
        
     }
}
