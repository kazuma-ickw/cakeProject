<?php

class PostsController extends AppController {
	
	public $helpers = array('Html', 'Form');

	public function index() {
		$params = array(
			'order' => 'modified desc',
			'limit' => 2
		);
		$this->set('posts', $this->Post->find('all', $params));
		$this->set('title_for_layout', '記事一覧');
//		$this->autoLayout = FALSE;
	}

	public function view($id = NULL) {
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
	}

	public function add() {
		if ($this->request->is('post')) {
			if($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your post.');
			}
		}
	}
	
	public function edit($id = NULL) {
		
		$this->Post->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Post->read();
		} else {
			if($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your post.');
			}

		}

	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if ($this->Post->delete($id)) {
			$this->Session->setFlash('The post with id: ' . $id . ' has been deleted .');
			$this->redirect(array('action' => 'index'));
		}
	}
	



}

?>
