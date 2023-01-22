<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function store(Request $REQUEST){
       // dd($REQUEST->all());
       $this->validate($REQUEST,[
        'nom'=>'required',
        'prenoms'=>'required',
        'tel'=>'required',
        'email'=>'required',
       ]);
       $participant = new \App\Models\Participant();
       $participant->nom=htmlspecialchars($REQUEST->nom);
       $participant->prenoms=htmlspecialchars($REQUEST->prenoms);
       $participant->tel=htmlspecialchars($REQUEST->tel);
       $participant->email=htmlspecialchars($REQUEST->email);
       $participant->save();
       return back()->with('message','Inscription effectué avec succès');
    }
    public function index(){
        $data['participants'] = \App\Models\Participant::all();
        return view('liste-participant',$data);
    }
}
