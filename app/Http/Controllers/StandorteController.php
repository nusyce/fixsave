<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;



class StandorteController extends Controller
{
    //


    public function index()
    {

        return view('standorte');

    }

    public  function  ResetLinkEmail(Request $request) {

        $mail = $request->input('email');
        return view('company_auth.passwords.reset')->with('email',$mail);
    }

    public  function  Reset2LinkEmail(Request $request) {

        $companypas = bcrypt($request->input('password'));
       $company = new Company();
        $mailexit = $company->where('email',$request->input('email'))->get();

        if(count($mailexit) == 0){

            return redirect()->route('/');
        }
        else{

            $company->where('email',$request->input('email'))->update(
                ['password'=> $companypas

                ]

            );

            return redirect()->route('login');
        }

    }

    public function companyverifmailuser(Request $request, $company_slug)
    {
        $usr = new User();

        $usr->where('id',$company_slug)->update(
            ['is_active'=> 1,
                'verified'=>1

            ]

        );

        return redirect('/home');
    }
   /* public function register(Request $request)
    {

        $date_f = $request->input('birth_d')." - ".$request->input('birth_m')." - ".$request->input('birth_y');
            $bewer = new Standorte();
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


        return view('Standorte');
    }*/
}
