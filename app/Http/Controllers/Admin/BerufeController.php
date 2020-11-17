<?php

namespace App\Http\Controllers\Admin;

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

class BerufeController extends Controller
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

    public function indexBerufe()
    {

        return view('admin.berufe.index');

    }



    public function createBerufe()
    {

        return view('admin.berufe.add');

    }




}
