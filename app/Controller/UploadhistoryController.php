<?php

App::uses('Controller', 'Controller');

class UploadhistoryController extends AppController {

    public $components = array('DebugKit.Toolbar');

    public function index() {
        $this->set('page_title','Upload History');
    }
}
