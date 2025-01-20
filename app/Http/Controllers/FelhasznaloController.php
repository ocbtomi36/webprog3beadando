<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cim;
use App\Models\Felhasznalo;
use App\Models\Profil;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;

class FelhasznaloController extends Controller
{
    function listAll(){
        /*
        $felhasznaloRecords = [['vezetek_nev' => 'Lecza', 'uto_nev' => 'Tomi','e-mail' => 'tomi@tomi.com', 'orszag' => 'Magyarorszag', 'varos' => 'Budapest', 'utca'=>'Semmi utca 4','telefonszam'=>'1112223'],
                                ['vezetek_nev' => 'Teszt', 'uto_nev' => 'Bela','e-mail' => 'teszt@tomi.com', 'orszag' => 'Magyarorszag', 'varos' => 'Budapest', 'utca'=>'Valaki utca 4','telefonszam'=>'12128/23']
            ];
            */
        $records = Felhasznalo::with(['profil','cim'])->get();
        return view('users.list',['users' => $records]);
    }

    function listOneById($id){

        $records = Felhasznalo::with(['profil', 'cim'])->find($id);
        if($records == null){
            return response()->json(['message' => 'Felhasználó nem található.'], 404);
        }

        return view('users.detail',['user'=> $records]);
    }

    function addOneUser(){
        return view('users.add');
    }

    function storeOneUser(Request $request){



        $validated = $request->validate([
            'vezetek_nev' => 'required|string|max:255',
            'uto_nev' => 'required|string|max:255',
            'e_mail' => 'required|email|max:255',
            'orszag' => 'required|string|max:255',
            'varos' => 'required|string|max:255',
            'utca' => 'required|string|max:255',
            'hazszam' => 'required|string|max:255',
            'telefonszam' => 'required|string|max:255'
        ]);

/*
        $newProfil = new Profil();
        $newProfil->telefonszam = $validated['telefonszam'];
        $newProfil->save();

        $newCim = new Cim();
        $newCim->orszag = $validated['orszag'];
        $newCim->varos = $validated['varos'];
        $newCim->utca = $validated['utca'];
        $newCim->hazszam = $validated['hazszam'];
        $newCim->save();

        $newFelhasznalo = new Felhasznalo();
        $newFelhasznalo->vezetek_nev = $validated['vezetek_nev'];
        $newFelhasznalo->utonev = $validated['uto_nev'];
        $newFelhasznalo->e_mail = $validated['e_mail'];
        $newFelhasznalo->idprofil = $newProfil->id;
        $newFelhasznalo->idcim = $newCim->id;
        $newFelhasznalo->save();

        */



        $profil = Profil::create(
            [
                'telefonszam' => $validated['telefonszam']
            ]);



        $cim = Cim::create([
            'orszag' => $validated['orszag'],
            'varos' => $validated['varos'],
            'utca' => $validated['utca'],
            'hazszam' => $validated['hazszam']
        ]);


        $felhasznalo = Felhasznalo::create([
            'vezetek_nev' => $validated['vezetek_nev'],
            'uto_nev' => $validated['uto_nev'],
            'e_mail' => $validated['e_mail'],
            'profil_idprofil' => $profil->idprofil,
            'cim_idcim' => $cim->idcim
        ]);

        //dd($felhasznalo);
        return redirect()->route('users.list')
            ->with('success', 'Felhasználó sikeresen létrehozva!');
    }

    function modifyOneUserById($id) {
        $record = Felhasznalo::with(['profil', 'cim'])->find($id);
        if($record == null){
            return response()->json(['message' => 'Felhasználó nem található.'], 404);
        }
        return view('users.modify',['user'=> $record]);
    }
    function updateOneUserById(Request $request,$id) {

        $validated = $request->validate([
            'vezetek_nev' => 'required|string|max:255',
            'uto_nev' => 'required|string|max:255',
            'e_mail' => 'required|email|max:255',
            'orszag' => 'required|string|max:255',
            'varos' => 'required|string|max:255',
            'utca' => 'required|string|max:255',
            'hazszam' => 'required|string|max:255',
            'telefonszam' => 'required|string|max:255'
        ]);

        $user = Felhasznalo::findOrFail($id);
        $user->update([
        'vezetek_nev' => $request->input('vezetek_nev'),
        'uto_nev' => $request->input('uto_nev'),
        'e_mail' => $request->input('e_mail'),
        ]);

        // Profil frissítése
        if ($user->profil) {
            $user->profil->update([
                'telefonszam' => $request->input('telefonszam'),
            ]);
        }

        // Cím frissítése
        if ($user->cim) {
            $user->cim->update([
                'orszag' => $request->input('orszag'),
                'varos' => $request->input('varos'),
                'utca' => $request->input('utca'),
                'hazszam' => $request->input('hazszam'),
            ]);
        }

        return redirect()->route('users.list')->with('success', 'Felhasználó sikeresen frissítve!');
    }
    function deleteOneUserById($id) {

        $felhasznalo = Felhasznalo::with(['profil', 'cim'])->find($id);
        if($felhasznalo == null){
            return response()->json(['message' => 'Felhasználó nem található.'], 404);
        }
        $felhasznalo->profil()->delete();
        $felhasznalo->cim()->delete();
        $felhasznalo->delete();
        return redirect()->route('users.list')
            ->with('success', 'Felhasználó sikeresen törölve!');
    }
}
