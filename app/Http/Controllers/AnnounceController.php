<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Announce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AnnounceController extends Controller
{
    public function create(){
        return view('admin.create');

    }
    public function read(){
        $announces=Announce::all();
        return view('admin.read',compact('announces'));
    }
    public function edit(Announce $Announce){
        return view('admin.edit',compact('Announce'));
    }
    public function delete(Announce $Announce){
        $Announce->delete();
        return to_route('read');
    }
    public function search(Request $request){
       if($request->search){
            $searcha=Announce::where('poste','LIKE','%'.$request->search.'%')->latest()->paginate(15);
            return view('admin.search',compact('searcha'));
               }else{
                return redirect()->back();
       }
    }
    public function update(Request $request,$id){
        $data=[];
        $data['poste']=$request->input('poste');
        $data['nom_entreprise']=$request->input('nom_entreprise');
        $data['délais']=$request->input('délais');
        $data['description']=$request->input('description');
        $data['site']=$request->input('site');
        $data['admin_id']=Auth::guard('admin')->user()->id;
        Announce ::find($id)->delete();
        $ann=new Announce();
        $ann->poste=$data['poste'];
        $ann->nom_entreprise=$data['nom_entreprise'];
        $ann->délais=$data['délais'];
        $ann->description=$data['description'];
        $ann->site=$data['site'];
        $ann->admin_id=$data['admin_id'];
        $ann->save();
        return to_route('read');

    }
    public function store(Request $request){
        $poste=$request->poste;
        $nom_entreprise=$request->nom_entreprise;
        $délais=$request->délais;
        $description=$request->description;
        $site=$request->site;
        $admin_id=Auth::guard('admin')->user()->id;
        $request->validate([
            'poste'=>'required'
        ]);
        Announce::create([

            'poste'=>$poste,
            'nom_entreprise'=>$nom_entreprise,
            'délais'=>$délais,
            'description'=>$description,
            'site'=>$site,
            'admin_id'=>$admin_id,
        ]);
        return redirect()->route('admin.dashboard');

    }
}
