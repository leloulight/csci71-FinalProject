<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    public function testHomePage()
    {
        $this->visit('/')
             ->see('Welcome to TaskrMastr!');

    }

    public function testLoginPage()
    {
        $this->visit('/auth/login')
            ->see('TaskrMastr Login');
    }
}
