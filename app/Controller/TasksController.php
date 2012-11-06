<?php

class TasksController extends AppController {

	var $name = 'Tasks';
	var $uses = array('Task');

	function index() {
		$this->set('tasks', $this->Task->find('all'));
	}

}
