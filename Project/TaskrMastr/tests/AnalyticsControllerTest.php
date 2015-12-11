<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnalyticsControllerTest extends TestCase
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
    public function testVisitAnalyticsPage() {
        $this->visit('/analytics')
            ->see('Burndown Graph');
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
