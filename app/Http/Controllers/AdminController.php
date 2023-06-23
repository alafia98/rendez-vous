<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lieu;
use App\Models\Filiere;
use App\Models\Date;
use App\Models\Time;
use App\Models\Etudiant;
use App\Models\Plan;
use App\Models\Rendezvous;
use App\Helpers\Helper;

class AdminController extends Controller
{
    ### Filière ###
    public function show_filiere() {
        $filiere = Filiere::all();
        return view('admin.filiere.show', compact('filiere'));
    }
    public function create_filiere() {
        return view('admin.filiere.create');
    }
    public function upload_filiere(Request $request) {
        $filiere = new Filiere;
        $filiere->nom_fr = $request->nom_fr;
        $filiere->nom_ar = $request->nom_ar;
        $filiere->save();
        return redirect()->back()->with('message', 'Filière Created Successfully');
    }
    public function edit_filiere($id) {
        $filiere = Filiere::find($id);
        return view('admin.filiere.edit', compact('filiere'));
    }
    public function update_filiere(Request $request, $id) {
        $filiere = Filiere::find($id);
        $filiere->nom_fr = $request->nom_fr;
        $filiere->nom_ar = $request->nom_ar;
        $filiere->save();
        return redirect()->back()->with('message', 'Département edited Successfully');
    }
    public function delete_filiere($id) {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect()->back()->with('message', 'Cette filière a été supprimer avec succès');
    }

### Lieu ###
    public function show_lieu() {
        $lieu = Lieu::with('filiere')->get();
        return view('admin.lieu.show', compact('lieu'));
    }
    public function create_lieu() {
        $filiere = Filiere::all();
        return view('admin.lieu.create', compact('filiere'));
    }
    public function upload_lieu(Request $request) {
        $lieu = new Lieu;
        $lieu->nom_fr = $request->nom_fr;
        $lieu->nom_ar = $request->nom_ar;
        $lieu->id_fil = $request->id_fil;
        $lieu->save();
        return redirect()->back()->with('message', 'Département Created Successfully');
    }
    public function edit_lieu($id) {
        $lieu = Lieu::find($id);
        $filiere = Filiere::all();
        return view('admin.lieu.edit', compact('filiere', 'lieu'));
    }
    public function update_lieu(Request $request, $id) {
        $lieu = Lieu::find($id);
        $lieu->nom_fr = $request->nom_fr;
        $lieu->nom_ar = $request->nom_ar;
        $lieu->id_fil = $request->id_fil;
        $lieu->save();
        return redirect()->back()->with('message', 'Département edited Successfully');
    }
    public function delete_lieu($id) {
        $lieu = Lieu::find($id);
        $lieu->delete();
        return redirect()->back()->with('message', 'Département Deleted Successfully');
    }

### Date ###
    public function show_date() {
        $date = Date::with('lieu')->get();
        return view('admin.date.show', compact('date'));
    }
    public function create_date() {
        $filieres = Filiere::all();
        return view('admin.date.create', compact('filieres'));
    }
    public function getLieus($idFil) {
        $lieus = Lieu::where('id_fil', $idFil)->get();
        return response()->json($lieus);
    }
    public function upload_date(Request $request) {
        $date = new Date;
        $date->date = $request->date;
        $date->id_lieu = $request->id_lieu;
        $date->save();
        return redirect()->back()->with('message', 'Filière Created Successfully');
    }
    public function edit_date($id) {
        $date = Date::find($id);
        $filieres = Filiere::all();
        return view('admin.date.edit', compact('date', 'filieres'));
    }
    public function update_date(Request $request, $id) {
        $date = date::find($id);
        $date->date = $request->date;
        $date->id_lieu = $request->id_lieu;
        $date->save();
        return redirect()->back()->with('message', 'Département edited Successfully');
    }
    public function delete_date($id) {
        $date = Date::find($id);
        $date->delete();
        return redirect()->back()->with('message', 'Département Deleted Successfully');
    }

### Time ###
        public function show_time() {
            $times = Time::with('date')->get();
            return view('admin.time.show', compact('times'));
        }
        public function create_time() {
            $filieres = Filiere::all();
            return view('admin.time.create', compact('filieres'));
        }
        public function getDates($idLieu) {
            $dates = Date::where('id_lieu', $idLieu)->get();
            return response()->json($dates);
        }
        public function upload_time(Request $request) {
            $time = new Time;
            $time->time = $request->time;
            $time->id_date = $request->id_date;
            $time->save();
            return redirect()->back()->with('message', 'Filière Created Successfully');
        }
        public function edit_time($id) {
            $time = Time::find($id);
            $filieres = Filiere::all();
            return view('admin.time.edit', compact('time', 'filieres'));
        }
        public function update_time(Request $request, $id) {
            $time = time::find($id);
            $time->time = $request->time;
            $time->id_date = $request->id_date;
            $time->save();
            return redirect()->back()->with('message', 'Département edited Successfully');
        }
        public function delete_time($id) {
            $time = Time::find($id);
            $time->delete();
            return redirect()->back()->with('message', 'Département Deleted Successfully');
        } 

    ### Rendez-vous ###
    public function show_rendezvous() {
        $rendezvous = Rendezvous::with('time')->get();
        return view('admin.rendezvous.show', compact('rendezvous'));
    }
    public function terminer($id) {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->status='terminé';
        $rendezvous->save();
        return redirect()->back();
    }
    public function attente($id) {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->status='en attente';
        $rendezvous->save();
        return redirect()->back();
    }
    public function create_rendezvous() {
        $filieres = Filiere::all();
        return view('admin.rendezvous.create', compact('filieres'));
    }
    public function getTimes($idDate) {
        $times = Time::where('id_date', $idDate)->get();
        return response()->json($times);
    }
    public function upload_rendezvous(Request $request) {
        $rendezvous = new Rendezvous;
        $rendezvous->code_rdv = Helper::IDGenerator(new Rendezvous, 'code_rdv', 4, '');
        $rendezvous->status;
        $rendezvous->cin = $request->cin;
        $rendezvous->id_time = $request->id_time;
        $rendezvous->save();
        return redirect()->back()->with('message', 'Filière Created Successfully');
    }
    public function edit_rendezvous($id) {
        $rendezvous = Rendezvous::find($id);
        $filieres = Filiere::all();
        return view('admin.rendezvous.edit', compact('filiere'));
    }
    public function update_rendezvous(Request $request, $id) {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->code_rdv = Helper::IDGenerator(new Rendezvous, 'code_rdv', 4, '');
        $rendezvous->status;
        $rendezvous->cin = $request->cin;
        $rendezvous->cne = $request->cne;
        $rendezvous->nom_fr = $request->nom_fr;
        $rendezvous->prenom_fr = $request->prenom_fr;
        $rendezvous->nom_ar = $request->nom_ar;
        $rendezvous->prenom_ar = $request->prenom_ar;
        $rendezvous->telephone = $request->telephone;
        $rendezvous->email = $request->email;
        $rendezvous->id_time = $request->id_time;
        $rdv->save();
        return redirect()->back()->with('message', 'Département edited Successfully');
    }
    public function delete_rendezvous($id) {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->delete();
        return redirect()->back()->with('message', 'Département Deleted Successfully');
    }  


    ### Réçu ###
    public function show_recu($id) {
        $rendezvous = Rendezvous::find($id);
        return view('admin.recu.show', compact('rendezvous'));
    }
}