<?php

class signup_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->content = View::instance('v_signup_index');

        $this->template->title = "Signup";

        echo $this->template;
    }

} # End of class
