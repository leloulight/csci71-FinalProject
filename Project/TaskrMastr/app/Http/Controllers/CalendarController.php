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

class CalendarController extends Controller
{

    public function index() {

        if(Auth::user()) {

            $events = [];


            $array_events = DB::table('tasks')->where('user_id', '=', Auth::user()->id)->get();

            foreach($array_events as $e) {
                //print_r($e);
                //echo '<br>';
                $events[] = \Calendar::event(
                    $e->name,
                    $e->allDay,
                    $e->start,
                    $e->end
                );
            }

            $calendar = \Calendar::addEvents($events) //add an array with addEvents
            ->setOptions([ //set fullcalendar options
                'firstDay' => 1
            ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
                'viewRender' => 'function() {}'
            ]);

            //return view('hello', compact('calendar'));

            return view('calendar.index', [
                'calendar' => $calendar,
                'name' => Auth::user()->name
            ]);
        }

        return redirect('/auth/login');

    }


}
