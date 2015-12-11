<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
//require_once("csci45finalproject_3/csci71-FinalProject/Project/TaskrMastr/app/Http/Controllers/EventModel.php");
use App\Http\Controllers\EventModel;
use App\Http\Controllers\CalendarController;

class EventModelTest extends TestCase
{

    public function testGetId()
    {
        $events = [];
        $event = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            '2015-02-14', //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
            '2015-02-14', //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
	1, //optional event ID
	[
        'url' => 'http://full-calendar.io'
    ]
);

        $calendar = \Calendar::addEvents($events) //add an array with addEvents
        ->addEvent($event, [ //set custom color fo this event
            'color' => '#800',
        ])->setOptions([ //set fullcalendar options
            'firstDay' => 1
        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'viewRender' => 'function() {}'
        ]);

        $eventModel = new EventModel();


        $this->assertNotEmpty($eventModel->getId());
    }

    public function testGetStart()
    {
        $eventModel = new EventModel();


        $this->assertNotEmpty($eventModel->getStart());
    }


}
?>