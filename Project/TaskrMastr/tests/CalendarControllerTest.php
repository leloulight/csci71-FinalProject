<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CalendarControllerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->visit('/auth/login')
            ->type('test@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login');
    }

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
    public function testCreateCalendarEvent() {
        $this->visit('/categories')
            ->see('Create Category [+]');
    }


    public function tearDown()
    {
        $this->visit('/categories')
            ->click('Hello, test')
            ->click('Logout');

        parent::tearDown();
        Mockery::close();
    }
}
