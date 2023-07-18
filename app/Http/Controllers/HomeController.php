<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Lieu;
use App\Models\Filiere;
use App\Models\Rendezvous;
use App\Models\Date;
use App\Models\Time;
use App\Models\Plan;
use App\Helpers\Helper;

class HomeController extends Controller
{
    public function redirect() {
        $usertype = Auth::user()->usertype;
            $lieu = Lieu::all();
            $filiere = Filiere::all();
            $rendezvous = Rendezvous::all();
            return view('admin.dashboard', compact('lieu', 'filiere', 'rendezvous'));
    }

    public function index() {
        if(Auth::id()) {
            return redirect('redirect');
        } else {
            $date = Date::all();
            return view('user.home', compact('date'));
        }
    }  
    public function index_ar() {
        if(Auth::id()) {
            return redirect('redirect');
        } else {
            $date = Date::all();
            return view('user.home_ar', compact('date'));
        }
    }  
    public function logout() {
        $date = Date::all();
        return vieww('user.home', compact('date'));
    }

    public function prendre_rdv() {
        $filieres = Filiere::all();
        return view('user.prendre.prendre_rdv', compact('filieres'));
    }
    public function getLieus($idFil) {
        $lieus = Lieu::where('id_fil', $idFil)->get();
        return response()->json($lieus);
    }
    public function getDates($idLieu) {
        $dates = Date::where('id_lieu', $idLieu)->get();
        return response()->json($dates);
    }
    public function getTimes($idDate) {
        $times = Time::where('id_date', $idDate)->get();
        return response()->json($times);
    }

    public function prendre_rdv_ar() {
        $filieres = Filiere::all();
        return view('user.prendre.prendre_rdv_ar', compact('filieres'));
    }
    public function getLieus_ar($idFil) {
        $lieus = Lieu::where('id_fil', $idFil)->get();
        return response()->json($lieus);
    }
    public function getDates_ar($idLieu) {
        $dates = Date::where('id_lieu', $idLieu)->get();
        return response()->json($dates);
    }
    public function getTimes_ar($idDate) {
        $times = Time::where('id_date', $idDate)->limit(3)->get();
        return response()->json($times);
    }

    public function create_rdv(Request $request) {
        $rendezvous = new Rendezvous;
        $rendezvous->code_rdv = mt_rand(10000,99999);
        // $rendezvous->code_rdv = Str::random(8);
        $rendezvous->cin = $request->cin;
        $rendezvous->cne = $request->cne;
        $rendezvous->nom_fr = $request->nom_fr;
        $rendezvous->prenom_fr = $request->prenom_fr;
        $rendezvous->nom_ar = $request->nom_ar;
        $rendezvous->prenom_ar = $request->prenom_ar;
        $rendezvous->telephone = $request->telephone;
        $rendezvous->email = $request->email;
        $rendezvous->id_time = $request->id_time;
        $count = Rendezvous::where('id_time', $request->id_time)->count();
        if ($count >= 20) {
            return redirect()->back()->with('message', 'Vous avez déjà pris trois rendez-vous pour cette date.');
        }
        $rendezvous->save();
            return redirect()->route('user.prendre.confirmation', $rendezvous->id) ->with('message', 'Filière Created Successfully');
    }

    public function create_rdv_ar(Request $request) {
        $rendezvous = new Rendezvous;
        $rendezvous->code_rdv = Helper::IDGenerator(new Rendezvous, 'code_rdv', 4, '');
        $rendezvous->cin = $request->cin;
        $rendezvous->cne = $request->cne;
        $rendezvous->nom_fr = $request->nom_fr;
        $rendezvous->prenom_fr = $request->prenom_fr;
        $rendezvous->nom_ar = $request->nom_ar;
        $rendezvous->prenom_ar = $request->prenom_ar;
        $rendezvous->telephone = $request->telephone;
        $rendezvous->email = $request->email;
        $rendezvous->id_time = $request->id_time;
        $rendezvous->save();
        return redirect()->route('user.prendre.confirmation', $rendezvous->id) ->with('message', 'Filière Created Successfully');
    }

    public function confirmation($id) {
        $rendezvous = Rendezvous::findOrFail($id);
        return view('user.prendre.confirmation', compact('rendezvous'));
    }

    public function search(Request $request) {
        $codeRdv = $request->input('code_rdv');
        $cin = $request->input('cin');

        if ($codeRdv) {
            $rendezvous = Rendezvous::where('code_rdv', $codeRdv)->first();
            
            if ($rendezvous) {
                return redirect()->route('user.prendre.confirmation', ['id' => $rendezvous->id]);
            } else {
                return back()->with('error', 'Rendez-vous introuvable');
            }
        }
        
        if ($cin) {
            $rendezvous = Rendezvous::where('cin', $cin)->first();
            
            if ($rendezvous) {
                return redirect()->route('user.prendre.confirmation', ['id' => $rendezvous->id]);
            } else {
                return back()->with('error', 'Rendez-vous introuvable');
            }
        }
        return view('user.gerer.search');
    }

    public function search_ar(Request $request) {
        $codeRdv = $request->input('code_rdv');
        $cin = $request->input('cin');

        if ($codeRdv) {
            $rendezvous = Rendezvous::where('code_rdv', $codeRdv)->first();
            
            if ($rendezvous) {
                return redirect()->route('user.prendre.confirmation', ['id' => $rendezvous->id]);
            } else {
                return back()->with('error', 'Rendez-vous introuvable');
            }
        }
        
        if ($cin) {
            $rendezvous = Rendezvous::where('cin', $cin)->first();
            
            if ($rendezvous) {
                return redirect()->route('user.prendre.confirmation', ['id' => $rendezvous->id]);
            } else {
                return back()->with('error', 'Rendez-vous introuvable');
            }
        }
        return view('user.gerer.search_ar');
    }
}