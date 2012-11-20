<?php

class MainController extends AppController {

	public $uses = array('User','Task','Process');

	public function index($name = NULL) {
		$this->User->name = $name;
		$userName = $this->User->find('all', array('conditions' => array('User.name' => $name)));
		$this->set('user', $userName);
	}

}
