<?php

namespace App\Http\Controllers\Admin;

use App\Wahle;
use Auth;
use DB;
use Input;
use Redirect;
use App\Job;
use App\Company;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DataTables;
use App\Http\Controllers\Controller;
use App\Traits\JobTrait;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use Illuminate\Support\Str;

class WahleController extends Controller
{

    use JobTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function indexWahle()
    {
        $add = new Wahle();

        $val = $add::all();
        return view('admin.wahle.index',compact('val',$val));

    }


    public function createWahle()
    {


        return view('admin.wahle.add');

    }


    public function storeWahle(Request $request)
    {
        $company = Auth::guard('company')->user();

        $wahle = new Wahle();

        $wahle->name = $request->input('wahle');



        $wahle->save();
        /*         * ******************************* */


        flash('Wahlet has been added!')->success();
        return \Redirect::route('list.wahle');
    }



}
