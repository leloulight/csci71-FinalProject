<?php

class login_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->content = View::instance('v_login_index');

        $this->template->title = "Login";

        echo $this->template;
    }

} # End of class
