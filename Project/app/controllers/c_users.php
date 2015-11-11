<?php

class users_controller extends base_controller {

    /*-------------------------------------------------------------------------------------------------

    -------------------------------------------------------------------------------------------------*/
    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $this->template->content = View::instance('v_login_index');

        $this->template->title = "Login";

        echo $this->template;
    }

    public function p_login() {
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        $q = 'SELECT token
		FROM users
		WHERE email = "'.$_POST['email'].'"
		AND password = "'.$_POST['password'].'"';

        $token = DB::instance(DB_NAME)->select_field($q);

        if($token){
            setcookie('token', $token, strtotime('+1 year'), '/');
            Router::redirect('/home');
        } else {
            Router::redirect('/users/login?action=login&error=loginAuth');
        }
    }

    public function signup() {
        $this->template->content = View::instance('v_signup_index');

        $this->template->title = "Signup";

        echo $this->template;
    }

    public function p_signup() {
        $exists = DB::instance(DB_NAME)->select_field("SELECT email FROM users WHERE email = '" . $_POST['email'] . "'");
        $existsUsername = DB::instance(DB_NAME)->select_field("SELECT username FROM users WHERE username = '" . $_POST['username'] . "'");

        if($_POST['username'] == "" || $_POST['email'] == "" || $_POST['password'] == "") {
            Router::redirect('/users/signup?action=signup&error=empty_fields');
        } else if(isset($exists)) {
            Router::redirect('/users/signup?action=signup&error=email_exists');
        } else if(isset($existsUsername)) {
            Router::redirect('/users/signup?action=signup&error=username_exists');
        } else {
            $_POST['created'] = Time::now();
            $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
            $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
            $_POST['username'] = strip_tags(stripslashes($_POST['username']));
            $_POST['email'] = strip_tags(stripslashes($_POST['email']));
            DB::instance(DB_NAME)->insert_row('users', $_POST);
        }

        $q = 'SELECT token
			  FROM users
			  WHERE email = "'.$_POST['email'].'"
			  AND password = "'.$_POST['password'].'"';

        $token = DB::instance(DB_NAME)->select_field($q);

        if($token) {
            setcookie('token', $token, strtotime('+1 year'), '/');
            Router::redirect('/home');
        } else {
            Router::redirect('/');
        }
    }

    public function logout() {
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        $data = Array('token' => $new_token);

        DB::instance(DB_NAME)->update('users', $data, 'WHERE user_id ='.$this->user->user_id);

        setcookie('token', '', strtotime('+1 year'), '/');

        Router::redirect('/');
    }

} # End of class
