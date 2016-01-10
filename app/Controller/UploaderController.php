<?php

App::uses('Controller', 'Controller');

class UploaderController extends AppController {

    public $components = array('DebugKit.Toolbar');

    public function index() {
        $this->set('page_title','レシートを送る');
    }

    public function survey(){
        $this->set('page_title','レシートを送った');
    }


}
