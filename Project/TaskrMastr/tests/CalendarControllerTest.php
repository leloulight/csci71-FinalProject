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
     * Test create, view, and delete calendar event
     */
    public function testCreateCalendarEvent() {
        $this->visit('/categories')
            ->see('Create Category [+]')
            ->click('Create Category [+]')
            ->type('Calendar test', 'name')
            ->type('calendar_test', 'slug')
            ->press('Create Category')

            ->visit('/categories/calendar_test/tasks/create')
            ->see('Create Task for Category')
            ->type('Test task', 'name')
            ->type('Task test', 'slug')
            ->type('This is a calendar test task', 'description')
            ->type(date("m/d/Y"), 'start')
            ->type(date("m/d/Y"), 'end')
            ->press('Create Task')
            ->seePageIs('/categories/calendar_test')
            ->see('Task created.')
            ->see('Test Task')
            ->visit('/calendar')
            ->see('Test Task')
            ->visit('/categories/calendar_test')
            ->see('Test task')
            ->press('Delete')
            ->seePageIs('/categories/calendar_test')
            ->see('Task deleted.')
            ->withoutMiddleware()
            ->call('DELETE', '/categories/calendar_test');
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
