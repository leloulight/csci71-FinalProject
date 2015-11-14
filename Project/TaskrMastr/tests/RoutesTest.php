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

    /**
     * Test to check that when trying to login with wrong email displays errors message.
     */
    public function testFailedLoginWithWrongEmail() {
        $this->visit('/auth/login')
            ->type('emaildoesnotexist@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login')
            ->see('These credentials do not match our records');
    }

    /**
     * Test to check that when trying to login with wrong password displays errors message.
     */
    public function testFailedLoginWithWrongPassword() {
        $this->visit('/auth/login')
            ->type('test@gmail.com', 'email')
            ->type('WrongPassword', 'password')
            ->press('Login')
            ->see('These credentials do not match our records');
    }

    /**
     * Test to check that when singing up with email that already exists in the database displays errors message.
     */
    public function testFailedSignupEmailExists() {
        $this->visit('/auth/register')
            ->type('testUser2', 'name')
            ->type('test@gmail.com', 'email')
            ->type('somePassword', 'password')
            ->type('somePassword', 'password_confirmation')
            ->press('Sign Up')
            ->see('The email has already been taken');
    }

    /**
     * Test to check that when singing up with username that already exists in the database displays errors message.
     */
    public function testFailedSignupUsernameExists() {
        $this->visit('/auth/register')
            ->type('testUser', 'name')
            ->type('test2@gmail.com', 'email')
            ->type('somePassword', 'password')
            ->type('somePassword', 'password_confirmation')
            ->press('Sign Up')
            ->see('The name has already been taken.');
    }

    /**
     * Test to check that when during sing up for a new account second password does not match displays errors message.
     */
    public function testFailedSignupNotMatchingPasswords() {
        $this->visit('/auth/register')
            ->type('testUser2', 'name')
            ->type('test2@gmail.com', 'email')
            ->type('somePassword', 'password')
            ->type('somePasswordNotMatching', 'password_confirmation')
            ->press('Sign Up')
            ->see('The password confirmation does not match.');
    }

    //Test successful signup -> FUNCTION
        //generate a random string and prepend to the email address.
        //use generated string for username
        //keep password as testing
        //confirm password as testing
        //create account
        // confirm by seeing home page


}