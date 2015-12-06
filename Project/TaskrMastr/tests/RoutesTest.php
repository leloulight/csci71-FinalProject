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
            ->see('Login')
            ->see('Forgot password?')
            ->dontSee('Welcome to your Dashboard.');
    }


    /**
     * Attempt a valid login, test to see that it is routed to home page after logging in.
     */
    public function testAuthLoginPage() {
        $this->visit('/auth/login')
            ->type('test@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login')
            ->seePageIs('/dashboard');
    }


    /**
     * Test to check that once logged in, it routes to home page by default.
     */
    public function testLoggedInUser() {
        $this->visit('/auth/login')
            ->type('test@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login')
            ->seePageIs('/dashboard')
            ->visit('/')
            ->seePageIs('/dashboard');
    }


    /**
     * If not logged in, don't allow access to home page, categories page, analytics page and caledar page.
     */
    public function testNotLoggedInUser() {
        $this->visit('/dashboard')
            ->seePageIs('/auth/login')
            ->visit('/categories')
            ->seePageIs('/auth/login')
            ->visit('/calendar')
            ->seePageIs('/auth/login')
            ->visit('/analytics')
            ->seePageIs('/auth/login');
    }

    /**
     * Test to check that when trying to login with wrong email displays errors message.
     */
    public function testFailedLoginWithWrongEmail() {
        $this->visit('/auth/login')
            ->type('emaildoesnotexist@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login')
            ->see('These credentials do not match our records.');
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
            ->type('test2', 'name')
            ->type('test@gmail.com', 'email')
            ->type('somePassword', 'password')
            ->type('somePassword', 'password_confirmation')
            ->type('Dummy security question answer', 'recovery')
            ->press('Sign Up')
            ->see('The email has already been taken');
    }

    /**
     * Test to check that when singing up with username that already exists in the database displays errors message.
     */
    public function testFailedSignupUsernameExists() {
        $this->visit('/auth/register')
            ->type('test', 'name')
            ->type('test2@gmail.com', 'email')
            ->type('somePassword', 'password')
            ->type('somePassword', 'password_confirmation')
            ->type('Dummy security question answer', 'recovery')
            ->press('Sign Up')
            ->see('The name has already been taken.');
    }

    /**
     * Test to check that when during sing up for a new account second password does not match displays errors message.
     */
    public function testFailedSignupNotMatchingPasswords() {
        $this->visit('/auth/register')
            ->type('test2', 'name')
            ->type('test2@gmail.com', 'email')
            ->type('somePassword', 'password')
            ->type('somePasswordNotMatching', 'password_confirmation')
            ->type('Dummy security question answer', 'recovery')
            ->press('Sign Up')
            ->see('The password confirmation does not match.');
    }

    /**
     * Test to check that when during sing up for a new account security answer is missing it displays error message.
     */
    public function testFailedSignupMissingSecurityAnswer() {
        $this->visit('/auth/register')
            ->type('test2', 'name')
            ->type('test2@gmail.com', 'email')
            ->type('somePassword', 'password')
            ->type('somePasswordNotMatching', 'password_confirmation')
            ->type('', 'recovery')
            ->press('Sign Up')
            ->see('The recovery field is required.');
    }

    /**
     * Test to check that a new user can successfully signup.
     */
    public function testSuccessfulSignup() {
        $testUser=uniqid('SignupTest_');
        $this->visit('/auth/register')
            ->type($testUser, 'name')
            ->type($testUser . '@gmail.com', 'email')
            ->type('somePassword', 'password')
            ->type('somePassword', 'password_confirmation')
            ->type('Dummy security question answer', 'recovery')
            ->press('Sign Up')
            ->see('Hello, ' . $testUser);
    }

}