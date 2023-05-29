<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lieu;
use App\Models\Filiere;
use App\Models\Etudiant;
use App\Models\Calendrier;
use App\Models\Rendezvous;

class AdminController extends Controller
{
    ### Lieu ###
    public function show_lieu() {
        $lieu = Lieu::all();
        return view('admin.lieu.show', compact('lieu'));
    }
    public function create_lieu() {
        return view('admin.lieu.create');
    }
    public function upload_lieu(Request $request) {
        $lieu = new Lieu;
        $lieu->nom_fr = $request->nom_fr;
        $lieu->nom_ar = $request->nom_ar;
        $lieu->save();
        return redirect()->back()->with('message', 'Département Created Successfully');
    }
    public function edit_lieu($id) {
        $lieu = Lieu::find($id);
        return view('admin.lieu.edit', compact('lieu'));
    }
    public function update_lieu(Request $request, $id) {
        $lieu = Lieu::find($id);
        $lieu->nom_fr = $request->nom_fr;
        $lieu->nom_ar = $request->nom_ar;
        $lieu->save();
        return redirect()->back()->with('message', 'Département edited Successfully');
    }
    public function delete_lieu($id) {
        $lieu = Lieu::find($id);
        $lieu->delete();
        return redirect()->back()->with('message', 'Département Deleted Successfully');
    }

    ### Filière ###
    public function show_filiere() {
        $filiere = Filiere::all();
        return view('admin.filiere.show', compact('filiere'));
    }
    public function create_filiere() {
        $lieu = Lieu::all();
        return view('admin.filiere.create', compact('lieu'));
    }
    public function upload_filiere(Request $request) {
        $filiere = new Filiere;
        $filiere->nom_fr = $request->nom_fr;
        $filiere->nom_ar = $request->nom_ar;
        $filiere->id_lieu = $request->id_lieu;
        $filiere->save();
        return redirect()->back()->with('message', 'Filière Created Successfully');
    }
    public function edit_filiere($id) {
        $filiere = Filiere::find($id);
        $lieu = lieu::all();
        return view('admin.filiere.edit', compact('filiere', 'lieu'));
    }
    public function update_filiere(Request $request, $id) {
        $filiere = Filiere::find($id);
        $filiere->nom_fr = $request->nom_fr;
        $filiere->nom_ar = $request->nom_ar;
        $filiere->id_lieu = $request->id_lieu;
        $filiere->save();
        return redirect()->back()->with('message', 'Département edited Successfully');
    }
    public function delete_filiere($id) {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect()->back()->with('message', 'Département Deleted Successfully');
    }


    ### Etudiant ###
    public function show_etudiant() {
        $etudiant = Etudiant::all();
        return view('admin.etudiant.show', compact('etudiant'));
    }
    public function create_etudiant() {
        $filiere = Filiere::all();
        return view('admin.etudiant.create', compact('filiere'));
    }
    public function upload_etudiant(Request $request) {
        $etudiant = new Etudiant;
        $etudiant->cin = $request->cin;
        $etudiant->cne = $request->cne;
        $etudiant->nom_fr = $request->nom_fr;
        $etudiant->prenom_fr = $request->prenom_fr;
        $etudiant->nom_ar = $request->nom_ar;
        $etudiant->prenom_ar = $request->prenom_ar;
        $etudiant->telephone = $request->telephone;
        $etudiant->email = $request->email;
        $etudiant->adresse = $request->adresse;
        $etudiant->id_fil = $request->id_fil;
        $etudiant->save();
        return redirect()->back()->with('message', 'Filière Created Successfully');
    }
    public function edit_etudiant($id) {
        $etudiant = Etudiant::find($id);
        $filiere = Filiere::all();
        return view('admin.etudiant.edit', compact('etudiant', 'filiere'));
    }
    public function update_etudiant(Request $request, $id) {
        $etudiant = Etudiant::find($id);
        $etudiant->cin = $request->cin;
        $etudiant->cne = $request->cne;
        $etudiant->nom_fr = $request->nom_fr;
        $etudiant->prenom_fr = $request->prenom_fr;
        $etudiant->nom_ar = $request->nom_ar;
        $etudiant->prenom_ar = $request->prenom_ar;
        $etudiant->telephone = $request->telephone;
        $etudiant->email = $request->email;
        $etudiant->adresse = $request->adresse;
        $etudiant->id_fil = $request->id_fil;
        $etudiant->save();
        return redirect()->back()->with('message', 'Département edited Successfully');
    }
    public function delete_etudiant($id) {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect()->back()->with('message', 'Département Deleted Successfully');
    }



    ### Calendrier ###
    public function show_calendrier() {
        $calendrier = Calendrier::all();
        return view('admin.calendrier.show', compact('calendrier'));
    }
    public function create_calendrier() {
        $filiere = Filiere::all();
        return view('admin.calendrier.create', compact('filiere'));
    }
    public function upload_calendrier(Request $request) {
        $calendrier = new Calendrier;
        $calendrier->date = $request->date;
        $calendrier->heure_debut = $request->heure_debut;
        $calendrier->heure_fin = $request->heure_fin;
        $calendrier->id_fil = $request->id_fil;
        $calendrier->save();
        return redirect()->back()->with('message', 'Filière Created Successfully');
    }
    public function edit_calendrier($id) {
        $calendrier = Calendrier::find($id);
        $filiere = Filiere::all();
        return view('admin.calendrier.edit', compact('calendrier', 'filiere'));
    }
    public function update_calendrier(Request $request, $id) {
        $calendrier = Calendrier::find($id);
        $calendrier->date = $request->date;
        $calendrier->heure_debut = $request->heure_debut;
        $calendrier->heure_fin = $request->heure_fin;
        $calendrier->id_fil = $request->id_fil;
        $calendrier->save();
        return redirect()->back()->with('message', 'Département edited Successfully');
    }
    public function delete_calendrier($id) {
        $calendrier = Calendrier::find($id);
        $calendrier->delete();
        return redirect()->back()->with('message', 'Département Deleted Successfully');
    }



    ### Rendez-vous ###
    public function show_rendezvous() {
        $rendezvous = Rendezvous::all();
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
        $calendrier = Calendrier::all();
        $etudiant = Etudiant::all();
        return view('admin.rendezvous.create', compact('calendrier', 'etudiant'));
    }
    public function upload_rendezvous(Request $request) {
        $rendezvous = new Rendezvous;
        $rendezvous->code_rdv = $request->code_rdv;
        $rendezvous->id_cal = $request->id_cal;
        $rendezvous->id_etd = $request->id_etd;
        $rendezvous->save();
        return redirect()->back()->with('message', 'Filière Created Successfully');
    }
    public function edit_rendezvous($id) {
        $rendezvous = Rendezvous::find($id);
        $calendrier = Calendrier::all();
        $etudiant = Etudiant::all();
        return view('admin.rendezvous.edit', compact('rendezvous', 'calendrier', 'etudiant'));
    }
    public function update_rendezvous(Request $request, $id) {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->code_rdv = $request->code_rdv;
        $rendezvous->id_cal = $request->id_cal;
        $rendezvous->id_etd = $request->id_etd;
        $rendezvous->save();
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