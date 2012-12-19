<?php
App::uses('AppController', 'Controller');
/**
 * Favors Controller
 *
 * @property Favor $Favor
 */
class FavorsController extends AppController {
    public $uses = array('Favor', 'Content', 'Item');

    function beforeFilter(){
        if($this->Session->check("username") && $this->Session->check("user_id")){
        }
        else {
            $this->redirect("/users/login");
        }
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
#        $this->Favor->recursive = -1;

        $favors = $this->Favor->find('all', array(
            'conditions'=>array(
                'User.id'=>$this->Session->read("user_id")
            ),
        ));

		$this->set('favors', $favors);//$this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		$this->set('favor', $this->Favor->read(null, $id));
	}

/**
 * add method
 * @param string $id
 * @return void
 */
    public function add($id) {
        $user_id = $this->Session->read('user_id');
        $this->Item->recursive = -1;
        $this->Favor->recursive = -1;
        $this->Content->recursive = -1;
        
        $item_id = $id;
        $this->Item->id = $item_id;
        $favor = $this->Favor->query("select count(*) as count from 365wzs_favors where item_id=$item_id and user_id=$user_id");

        if(!$this->Item->exists()){
            $this->Session->setFlash(__('Favor item not exists'));
            $this->redirect('/');
        } 
        else if($favor[0][0]['count'] > 0){
            // this judge for whether have shared this items
            $this->Session->setFlash(__('Already Shared this item.'));
            $this->redirect("/");
        }
        else {
          if ($this->request->is('post')) {
              $favor['Favor'] = $this->request->data;
              $this->Favor->save($favor);
		    	if ($this->Favor->save($this->request->data)) {
			    	$this->Session->setFlash(__('The favor has been saved'));
                    $this->Item->query("update 365wzs_items set favor_count=favor_count+1 where id = $item_id");
			    	$this->redirect('/');
			    } else {
			    	$this->Session->setFlash(__('The favor could not be saved. Please, try again.'));
                }
		    }
            $contents = $this->Content->find('all',
                array(
                    'conditions'=>array(
                        'user_id'=>$user_id//$this->Session->read("user_id")
                    )
                )
            );
            $this->set(compact('contents', 'item_id'));
        }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Favor->save($this->request->data)) {
				$this->Session->setFlash(__('The favor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Favor->read(null, $id);
		}
		$users = $this->Favor->User->find('list');
		$items = $this->Favor->Item->find('list');
		$contents = $this->Favor->Content->find('list');
		$this->set(compact('users', 'items', 'contents'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		if ($this->Favor->delete()) {
			$this->Session->setFlash(__('Favor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Favor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Favor->recursive = 0;
		$this->set('favors', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		$this->set('favor', $this->Favor->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Favor->create();
			if ($this->Favor->save($this->request->data)) {
				$this->Session->setFlash(__('The favor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favor could not be saved. Please, try again.'));
			}
		}
		$users = $this->Favor->User->find('list');
		$items = $this->Favor->Item->find('list');
		$contents = $this->Favor->Content->find('list');
		$this->set(compact('users', 'items', 'contents'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Favor->save($this->request->data)) {
				$this->Session->setFlash(__('The favor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Favor->read(null, $id);
		}
		$users = $this->Favor->User->find('list');
		$items = $this->Favor->Item->find('list');
		$contents = $this->Favor->Content->find('list');
		$this->set(compact('users', 'items', 'contents'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		if ($this->Favor->delete()) {
			$this->Session->setFlash(__('Favor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Favor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
