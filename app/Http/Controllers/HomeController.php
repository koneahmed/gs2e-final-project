<?php

namespace App\Http\Controllers;

use App\Models\Sexe;
use App\Models\Niveau;
use App\Models\Formations;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){

        $niveaux = Niveau::orderBy('name', 'ASC')->get();
        $sexes = Sexe::orderBy('libelle', 'ASC')->get();
        $formations = Formations::orderBy('libelle', 'ASC')->get();
        return view('website.home', compact('niveaux','sexes', 'formations'));
    }

    public function register()
    {
        $niveaux = Niveau::orderBy('name', 'ASC')->get();
        $sexes = Sexe::orderBy('libelle', 'ASC')->get();
        $formations = Formations::orderBy('libelle', 'ASC')->get();
        return view('website.register', compact('niveaux','sexes', 'formations'));
        // return view('website.register');
    }

    public function inscrption(Request $request){
        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required',
            'niveau' => 'required',
            'sexe' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'habitation' => 'required',
            'formation_souhaitee' => 'required',
            'information' => 'required',
            'cv' => 'required',
            'motivation' => 'required'

        ],
        [
            'nom.required' => 'Le nom est obligatoire',
            'nom.string' => 'Le nom doit être obligatoire',
            //'nom.unique' => 'Un enregistrement porte deja ce nom',
        ]);


        // $filenameWithExt = $request->file('cv')->getClientOriginalName();
        // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // $extension = $request->file('cv')->getClientOriginalExtension();
        // $filenameWithTime = $filename.'_'.time();
        // $fileNameToStore = $filenameWithTime . '.' .$extension;
        $path = $request->file('cv')->store('cv','public');
        // dd($request->all());
        $save_user = new Participant;


        // $image = $request->file('cv');
        // $imageName = $image->getClientOriginalName();
        // $image->move(public_path('CV', $imageName));

        //Inscriptions::create($request->except('_token'));


        $save_user->nom = $request->nom;
        $save_user->prenom = $request->prenom;
        $save_user->date_naissance = $request->date_naissance;
        $save_user->niveau_id = $request->niveau;
        $save_user->sexe_id = $request->sexe;
        $save_user->contact = $request->contact;
        $save_user->email = $request->email;
        $save_user->habitation = $request->habitation;
        $save_user->formation_id = $request->formation_souhaitee;
        $save_user->cv = $path;
        $save_user->motivation = $request->motivation;
        $save_user->information = $request->information;

        //dd($save_user); die();

        if($save_user->save()):
            return redirect()->back()->with('success', 'Enregistrement effectué!');
        endif;
    }
}
