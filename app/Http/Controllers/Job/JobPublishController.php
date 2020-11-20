<?php

namespace App\Http\Controllers\Job;

use App\Job;
use Auth;
use DB;
use Input;
use Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Traits\JobTrait;
use Illuminate\Support\Str;

class JobPublishController extends Controller
{

    use JobTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company');
    }

    public function updateFrontJob(Request $request,$id) {

        $job = new Job();
        $job->where('id',$id)->update(
            ['title'=>$request->input('title'),
            'geschlecht'=>$request->input('geschlecht'),
            'vertragsart'=>$request->input('vertragsart'),
            'branche'=>$request->input('branche'),
            'beruf'=>$request->input('beruf'),
            'bereich'=>$request->input('bereich'),
            'zeit'=>$request->input('zeit'),
            'options'=>$request->input('options'),
            'wochenstunden'=>$request->input('wochenstunden'),
            'start'=>$request->input('start'),
            'verdienstpro'=>$request->input('verdienstpro'),
            'land'=>$request->input('land'),
            'bundesland'=>$request->input('bundesland'),
            'plz'=>$request->input('plz'),
            'stadt'=>$request->input('stadt'),
            'arbeitsort'=>$request->input('arbeitsort'),
            'deutschlevel'=>$request->input('deutschlevel'),
            'englischlevel'=>$request->input('englischlevel'),
            'sonstige'=>$request->input('sonstige'),
            'fuhrerschein'=>$request->input('fuhrerschein'),
            'unterkunft'=>$request->input('unterkunft'),
            'ausstattung'=>$request->input('ausstattung'),
            'wanie'=>$request->input('wanie'),
            'description'=>$request->input('description'),
                'expiry_date' => '2027-05-15 21:00:00',
                'slug' => Str::slug($request->input('title'), '-') . '-' . $id]


        );

        flash('Job has been update!')->success();
        return \Redirect::route('posted.jobs');

    }

}
