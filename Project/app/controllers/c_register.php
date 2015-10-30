<?php

class register_controller extends base_controller {

    /*-------------------------------------------------------------------------------------------------

    -------------------------------------------------------------------------------------------------*/
    public function __construct() {
        parent::__construct();
    }

    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/register/index/
    -------------------------------------------------------------------------------------------------*/
    public function index() {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_register_index');

        # Now set the <title> tag
        $this->template->title = "Register";


        # Render the view
        echo $this->template;

    } # End of method


    public function register() {
        $existsEmail = DB::instance(DB_NAME)->select_field("SELECT email FROM users WHERE email= '" . $_POST['email'] . "'");
        $existsUsername = DB::instance(DB_NAME)->select_field("SELECT username FROM users WHERE email= '" . $_POST['username'] . "'");

        if(isset($existsEmail)) {
            Router::redirect('/register/error');
        } else if(isset($existsUsername)) {
            Router::redirect('/register/error');
        } else if($_POST['username'] == "" || $_POST['email'] == "" || $_POST['password'] == "") {
            Router::redirect('/register/error');
        } else {

            $_POST['created'] = Time::now();
            $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
            $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
            $_POST['username'] = strip_tags(stripslashes($_POST['username']));
            $_POST['email'] = strip_tags(stripslashes($_POST['email']));
            $_POST['phonenumber'] = strip_tags(stripslashes($_POST['phonenumber']));

            DB::instance(DB_NAME)->insert("users", $_POST);

            Router::redirect('/login');
        }

    } # End of method


} # End of class
