<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Lieu;
use App\Models\Filiere;
use App\Models\Etudiant;
use App\Models\Rendezvous;
use App\Models\Calendrier;
use App\Helpers\Helper;

class HomeController extends Controller
{

    public function redirect() {
        $usertype = Auth::user()->usertype;
        if($usertype == '1') {
            $lieu = Lieu::all();
            $filiere = Filiere::all();
            $etudiant = Etudiant::all();
            $rendezvous = Rendezvous::all();
            $calendrier = Calendrier::all();
            return view('admin.dashboard', compact('lieu', 'filiere', 'etudiant', 'rendezvous', 'calendrier'));
        } else {
            $calendrier = Calendrier::all();
            return view('user.home', compact('calendrier'));
        }

    }
    public function index() {
        if(Auth::id()) {

            return redirect('redirect');
        } else {
            $calendrier = Calendrier::all();
            return view('user.home', compact('calendrier'));
        }
    }
    public function logout() {
        $calendrier = Calendrier::all();
        return vieww('user.home', compact('calendrier'));
    }

    public function create_std() {
        $filiere = Filiere::all();
        $lieu = Lieu::all();
        $calendrier = Calendrier::all();
        return view('user.prendre.create_std', compact('filiere', 'lieu', 'calendrier'));
    }

    public function upload_std(Request $request) {
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

    public function prendre_rdv() {
        $calendrier = Calendrier::all();
        $etudiant = Etudiant::all();
        $lieu = Lieu::all();
        $filiere = Filiere::all();
        return view('user.prendre.prendre_rdv', compact('calendrier', 'filiere', 'etudiant', 'lieu'));
    }

    public function create_rdv(Request $request) {
        $rendezvous = new Rendezvous;
        $rendezvous->code_rdv = Helper::IDGenerator(new Rendezvous, 'code_rdv', 4, '');
        $rendezvous->id_cal = $request->id_cal;
        $rendezvous->id_etd = $request->id_etd;
        $rendezvous->save();
        return redirect()->back()->with('message', 'Filière Created Successfully');
    }

    public function confirmation() {
        return view('user.prendre.confirmation');
    }

    // public function create_rendezvous(Request $request) {
    //     $rendezvous = new Rendezvous;
    //     $rendezvous->code_rdv = $request->code_rdv;
    //     $rendezvous->status = $request->status;
    //     $rendezvous->id_cal = $request->id_cal;
    //     $rendezvous->save();
    //     return redirect()->back()->with('message', 'Filière Created Successfully');
    // }
    // public function edit_rendezvous($id) {
    //     $rendezvous = Rendezvous::find($id);
    //     $calendrier = Calendrier::all();
    //     return view('admin.rendezvous.edit', compact('rendezvous', 'calendrier'));
    // }
    // public function update_rendezvous(Request $request, $id) {
    //     $rendezvous = Rendezvous::find($id);
    //     $rendezvous->code_rdv = $request->code_rdv;
    //     $rendezvous->status = $request->status;
    //     $rendezvous->id_cal = $request->id_cal;
    //     $rendezvous->save();
    //     return redirect()->back()->with('message', 'Département edited Successfully');
    // }
    // public function delete_rendezvous($id) {
    //     $rendezvous = Rendezvous::find($id);
    //     $rendezvous->delete();
    //     return redirect()->back()->with('message', 'Département Deleted Successfully');
    // }  
}
