<?php
App::uses('AppController', 'Controller');

class ContentsController extends AppController {

	public function index() {
		$this->Content->recursive = -1;
		
		$contents = $this->Content->find("all", array(
			'conditions'=>array(
				'user_id'=>$this->uid,
			)
		));
		$this->set("contents", $contents);
	}

	public function view($id = null) {
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid content'));
		}
		
		$favors = $this->Content->Favor->find("all", array(
			'conditions'=>array(
				'Favor.content_id' => $id
			)
		));
		//pr($favors);
		$this->set("favors", $favors);
		//pr($this->Content->read(null, $id));
		//$this->set('content', $this->Content->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$content['Content'] = $this->request->data;
			$content['Content']['user_id'] = $this->uid;
			
			if ($this->Content->save($content)) {
				$this->Session->setFlash(__('The content has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'));
			}
		}
		$users = $this->Content->User->find('list');
		$this->set(compact('users'));
	}

	public function edit($id = null) {
		$this->Content->recursive = -1;
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid content'));
		}
		if ($this->request->is('post')) {
			$content['Content'] = $this->request->data;
			$content['Content']['id'] = $id;
			
			if ($this->Content->save($content)) {
				$this->Session->setFlash(__('修改成功'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('修改失败, 请稍后重试.'));
			}
		} 
		
		$content = $this->Content->read(null, $id);
		$this->set(compact('content'));
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid content'));
		}
		if ($this->Content->delete()) {
			$this->Session->setFlash(__('Content deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Content was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
