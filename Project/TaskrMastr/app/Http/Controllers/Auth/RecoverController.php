<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Input;
use Redirect;
use DB;

class RecoverController extends Controller
{

    public function index() {
        return view('auth.recover');
    }


    public function postRecover(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'recovery' => 'required|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('email', $_POST['email'])->get();
        if($user->isEmpty()) {
            return redirect()->back()->withErrors("Email address does not exist.");
        }

        $matchParams = ['email' => $_POST['email'], 'recovery' => $_POST['recovery']];
        $user = User::where($matchParams)->get();

        if($user->isEmpty()) {
            return redirect()->back()->withErrors("Security question answer is invalid.");
        } else {
            if(count($user) == 1) {
                $newPassword = bcrypt($_POST['password']);
                User::where($matchParams)->update(array('password' => $newPassword));
                return redirect("/auth/login")->with('status', 'Password updated!');

            } else {
                return redirect()->back()->withErrors("Invalid inputs.");
            }


        }


    }

}
