<?php

class logout_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        if(!$this->user) {
            Router::redirect("/");
        }
    }

    public function index($error = NULL) {
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());
        $data = Array('token' => $new_token);
        DB::instance(DB_NAME)->update('users', $data, 'WHERE user_id ='.$this->user->user_id);
        setcookie('token', '', strtotime('+1 year'), '/');
        Router::redirect('/');
    }

} # End of class
