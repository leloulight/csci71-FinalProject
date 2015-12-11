<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardControllerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->visit('/auth/login')
            ->type('test@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login');
    }


    public function testVisitDashboardPage() {
        $this->visit('/dashboard')
            ->see('Welcome to your Dashboard')
            ->see('Tasks Completed')
            ->see('View Categories')
            ->see('Create a Category')
            ->see('View Calendar')
            ->see('Your Analytics');
    }


    public function testDashboardClickViewCategoryLink() {
        $this->visit('/dashboard')
            ->see('View Categories')
            ->click('View Categories')
            ->seePageIs('/categories');
    }


    public function testDashboardClickCreateCategoryLink() {
        $this->visit('/dashboard')
            ->see('Create a Category')
            ->click('Create a Category')
            ->seePageIs('/categories/create');
    }


    public function testDashboardClickViewCalendarLink() {
        $this->visit('/dashboard')
            ->see('View Calendar')
            ->click('View Calendar')
            ->seePageIs('/calendar');
    }


    public function testDashboardClickViewAnalyticsLink() {
        $this->visit('/dashboard')
            ->see('Your Analytics')
            ->click('Your Analytics')
            ->seePageIs('/analytics');
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
