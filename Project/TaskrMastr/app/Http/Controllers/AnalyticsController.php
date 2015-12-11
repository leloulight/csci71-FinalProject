<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Input;
use Redirect;
use DB;

class AnalyticsController extends Controller
{

    public function index() {

        if(Auth::user()) {
            return view('analytics.index', [
                'name' => Auth::user()->name
            ]);
        }

        return redirect('/auth/login');
    }


}
