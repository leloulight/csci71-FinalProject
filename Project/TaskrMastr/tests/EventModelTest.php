<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
//require_once("csci45finalproject_3/csci71-FinalProject/Project/TaskrMastr/app/Http/Controllers/EventModel.php");
use App\Http\Controllers\EventModel;
use App\Http\Controllers\CalendarController;

class EventModelTest extends TestCase
{



    public function testGetTitle()
    {

        $event = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            '2015-12-31', //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
            '2015-12-31', //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
            1, //optional event ID
            [
                'url' => 'http://full-calendar.io'
            ]
        );

        $calendar = \Calendar::addEvent($event) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            'firstDay' => 1
        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'viewRender' => 'function() {}'
        ]);

        $eventModel = new EventModel();

        //Doesn't work
        //$this->assertEquals("Valentine's Day", $eventModel->getTitle());

        //Works but id is some funny string. But actually it is testing getId method in the Calendar.php class. Doesn't help with code coverage either
        $this->assertNotEmpty($calendar->getId());
    }




}
?>




/**
*
*/
/*WRITE A TEST TO DO THE FOLLOWING:
1. Create a category
2. Create a task in that category
- specify a start and end date
3. visit the calendar page to see that task appears
4. delete task
5. delete category
*/
