<?php

class home_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->content = View::instance('v_home_index');

        $this->template->title = "Home";

        $this->template->content->user = $this->user->username;

        echo $this->template;
    }

} # End of class
