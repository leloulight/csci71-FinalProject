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

        $events = [];



        $eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

        $calendar = \Calendar::addEvents($events) //add an array with addEvents
        ->addEvent($eloquentEvent, [ //set custom color fo this event
            'color' => '#800',
        ])->setOptions([ //set fullcalendar options
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


}
