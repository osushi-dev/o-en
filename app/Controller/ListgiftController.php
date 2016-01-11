<?php

App::uses('Controller', 'Controller');

class ListgiftController extends AppController {

    public $components = array('DebugKit.Toolbar');

    public function index() {
        $this->set('page_title','Listgift');
    }
}

