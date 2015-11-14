<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoutesTest extends TestCase
{
    /**
     * Test to see that the welcome page is routed to and that content is loaded.
     */
    public function testHomePage() {
        $this->visit('/')
            ->see('Welcome to TaskrMastr!')
            ->dontSee('homepage');
    }


    /**
     * Test to see that the welcome page is routed to and that content is loaded.
     */
    public function testLoginPage()
    {
        $this->visit('/auth/login')
            ->see('TaskrMastr Login')
            ->dontSee('Welcome to TaskrMastr!');
    }


    /**
     * Attempt a valid login, test to see that it is routed to home page after logging in.
     */
    public function testAuthLoginPage() {
        $this->visit('/auth/login')
            ->type('test@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login')
            ->seePageIs('/home');
    }


    /**
     * Test to check that once logged in, never show welcome page, instead route to home page.
     */
    public function testLoggedInUser() {
        $this->visit('/auth/login')
            ->type('test@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login')
            ->seePageIs('/home')
            ->visit('/')
            ->seePageIs('/home');
    }


    /**
     * If not logged in, don't allow access to home page.
     */
    public function testNotLoggedInUser() {
        $this->visit('/home')
            ->seePageIs('/');
    }


    public function testFailedLogin() {
        $this->visit('/auth/login')
            ->type('emaildoesnotexist@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login')
            ->see('These credentials do not match our records');
    }


    //Test error on signup
        //error caused by email exists -> FUNCTION
        //error caused by username exists _> FUNCTION
        //error caused by not matching passwords -> FUNCTION

    //Test successful signup -> FUNCTION
        //generate a random string and prepend to the email address.
        //use generated string for username
        //keep password as testing
        //confirm password as testing
        //create account
        // confirm by seeing home page


}