<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_index');
			
		# Now set the <title> tag
			$this->template->title = "Homepage";
	
		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	    	*/
	      					     		
		# Render the view
			echo $this->template;

	} # End of method

    public function login() {
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
            Router::redirect('/login?action=login&error=loginAuth');
        }
    }

	public function signup() {
		$exists = DB::instance(DB_NAME)->select_field("SELECT email FROM users WHERE email = '" . $_POST['email'] . "'");
		$existsUsername = DB::instance(DB_NAME)->select_field("SELECT username FROM users WHERE username = '" . $_POST['username'] . "'");

		if($_POST['username'] == "" || $_POST['email'] == "" || $_POST['password'] == "") {
			Router::redirect('/signup?action=signup&error=empty_fields');
		} else if(isset($exists)) {
			Router::redirect('/signup?action=signup&error=email_exists');
		} else if(isset($existsUsername)) {
			Router::redirect('/signup?action=signup&error=username_exists');
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
	
	
} # End of class
