<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postule;
use App\Http\Controllers\Controller;
use App\Models\Announce;

use Illuminate\Support\Facades\Auth;

class PostuleController extends Controller
{
    //
    public function store3(Request $request){
        //dd($request->all());
        $name=$request->name;
        $email=$request->email;
        $date_de_naissance=$request->date_de_naissance;
        $genre=$request->genre;
        $Téléphone=$request->Téléphone;
        $message=$request->message;
        $cv=$request->cv;
        $idn=$request->idn;
        //$admin_id=Auth::guard('admin')->user()->id;
        $request->validate([
            'genre'=>'required'
        ]);
        Postule::create([

            'name'=>$name,
            'email'=>$email,
            'date_de_naissance'=>$date_de_naissance,
            'genre'=>$genre,
            'Téléphone'=>$Téléphone,
            'message'=>$message,
            'cv'=>$cv,
            'idn'=>$idn,
        ]);
        return redirect()->route('welcome');

    }
}
