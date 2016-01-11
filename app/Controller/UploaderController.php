<?php

App::uses('Controller', 'Controller');

class UploaderController extends AppController {

    public $components = array('DebugKit.Toolbar');

    public function index() {
        $this->set('page_title','レシートを送る');
    }

    public function add(){
    	if (is_uploaded_file($_FILES["picture"]["tmp_name"])) {
	   ; 
   	}else{
	    //アップロードファイルが未選択
      	    $this->Session->setFlash('画像が選択されていません。', 'default', array('class' => 'alert alert-success'));
      	    $this->redirect('/uploader');

	}
    }


    public function survey(){
        $this->set('page_title','レシートを送った');
    }


}
