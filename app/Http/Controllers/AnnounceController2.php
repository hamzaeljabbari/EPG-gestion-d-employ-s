<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Event;
use App\Models\Announce2;

class AnnounceController2 extends Controller
{
    public function create2(){
        return view('create2');

    }
    public function read2(){
        //dd(Announce::all());
        $announce2s=Announce2::all();
        return view('read2',compact('announce2s'));

    }
    public function edit2(Announce2 $Announce2){
        return view('edit2',compact('Announce2'));
    }
    public function delete2(Announce2 $Announce2){
        $Announce2->delete();
        return to_route('read2');
    }
    public function search2(Request $request){
       if($request->search2){
            $searcha2=Announce2::where('poste2','LIKE','%'.$request->search2.'%')->latest()->paginate(15);
            return view('search2',compact('searcha2'));
               }else{
                return redirect()->back();
       }
    }
    public function update2(Request $request,$id){
        $data=[];
        $data['poste2']=$request->input('poste2');
        //$data['nom_entreprise2']=$request->input('nom_entreprise2');
        $data['délais2']=$request->input('délais2');
        $data['description2']=$request->input('description2');
        //$data['site2']=$request->input('site2');
        $data['user_id']=Auth::user()->id;
        Announce2 ::find($id)->delete();
        $ann=new Announce2();
        $ann->poste2=$data['poste2'];
        //$ann->nom_entreprise2=$data['nom_entreprise2'];
        $ann->délais2=$data['délais2'];
        $ann->description2=$data['description2'];
        //$ann->site2=$data['site2'];
        $ann->user_id=$data['user_id'];
        $ann->save();
        return to_route('read2');
        //dd($Announce);
    }
    public function store2(Request $request){
        //dd(Auth::guard('admin')->user()->id);
        $poste2=$request->poste2;
        //$nom_entreprise2=$request->nom_entreprise2;
        $délais2=$request->délais2;
        $description2=$request->description2;
        //$site2=$request->site2;
        //$ff=$request->validate();
        //$ff['admin_id']=Auth::guard('admin')->user()->id;
        //Announce::create($ff);
        $user_id=Auth::user()->id;
        $request->validate([
            'poste2'=>'required'
        ]);
        Announce2::create([

            'poste2'=>$poste2,
            //'nom_entreprise2'=>$nom_entreprise2,
            'délais2'=>$délais2,
            'description2'=>$description2,
            //'site2'=>$site2,
            'user_id'=>$user_id,
        ]);
        return redirect()->route('dashboard');

    }
}
