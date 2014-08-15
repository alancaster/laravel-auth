<?php

class ListingsController extends BaseController {

    protected $layout = "layouts.main";

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
//        $this->beforeFilter('auth', array('only' => array('getDashboard')));
    }

    public
            function getDefault() {
        return $this->layout->content = View::make('listings.listings');
    }

}
