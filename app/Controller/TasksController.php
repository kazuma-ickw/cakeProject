<?php
App::uses('AppController', 'Controller');
/**
 * Tasks Controller
 *
 * @property Task $Task
 */
class TasksController extends AppController {

	public function index() {
	}

	public function add() {
		if ($this->request->is('post')) {
			print_r($this->request->data);
			if ($this->request->data['post']['new'] == 1) {
				$data = array(
					'Task' => array(
						'user_id' => $this->request->data['post']['user_id'],
						'content' => $this->request->data['post']['task_name'],
						'percentage' => 0,
						'limit_date' => $this->request->data['limit_date'],
						'time' => 0,
						'status' => 0,
						'complete_flg' => 0,
						'delete_flg' => 0,
						)
					);
				print_r($data);
				if($this->Task->save($data)) {
					//$options = array(
					//	'conditions' => array('Task.user_id' => $this->request->data['post']['user_id']),
					//	'fields' => array('User.name'),
					//);
					//$data = $this->Task->find($options);
					$this->Session->setFlash('タスクが登録されました。');
					$this->redirect('/main/index/' . $this->request->data['post']['user_id']);
					return;

				} else {
					echo 'miss';
				}
			}
		}
	}
}
