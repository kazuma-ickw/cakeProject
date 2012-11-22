<?php

class MainController extends AppController {

	public $uses = array('User','Task','Process');

	public function index($id = NULL) {
		$this->User->id = $id;
		$user = $this->User->find('all', array('conditions' => array('User.id' => $id)));
		$this->set('user', $user);
	}

}
