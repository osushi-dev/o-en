<?php

App::uses('Controller', 'Controller');

class ListoenmakerController extends AppController {

    public $components = array('DebugKit.Toolbar');

    public function index() {
        $this->set('page_title','Listoenmaker');
    }
}
