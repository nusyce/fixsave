<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class DatenschutzbestimmungController extends Controller
{
    //


    public function index()
    {

        return view('datenschutzbestimmung');

    }

   /* public function register(Request $request)
    {

        $date_f = $request->input('birth_d')." - ".$request->input('birth_m')." - ".$request->input('birth_y');
            $bewer = new Datenschutzbestimmung();
            $bewer->anrede = $request->input('anrede');
            $bewer->titel = $request->input('titel');
            $bewer->vorname = $request->input('vorname');
            $bewer->nachname = $request->input('nachname');
            $bewer->strabe = $request->input('strabe');
            $bewer->hausnummer = $request->input('strabe');
            $bewer->plz_landercode = $request->input('country');
            $bewer->plz = $request->input('plz');
            $bewer->ort = $request->input('ort');
            $bewer->geburtsdatum = $date_f;
            $bewer->tagsuber = $request->input('telefon');
            $bewer->email = $request->input('email');
            $bewer->letzte_position = $request->input('position');
            $bewer->profiltyp = $request->input('profiltyp');
            $bewer->bedeutendste = $request->input('bedeutendste');
            $bewer->weitere = $request->input('weitere');
            $bewer->aktuelles = $request->input('gehalt');
            $bewer->kundigungsfirst = $request->input('kuendigung');
            $bewer->komentar = $request->input('kommentar');
           //  $bewer->bewer =  $_FILES['file']['tmp_name'];

            $bewer->raumliche = serialize($request->input('raem'));
            $bewer->save();


        return view('Datenschutzbestimmung');
    }*/
}
