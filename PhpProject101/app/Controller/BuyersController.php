<?php
App::uses('AppController', 'Controller');
/**
 * Buyers Controller
 *
 * @property Buyer $Buyer
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BuyersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Buyer->recursive = 0;
		$this->set('buyers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Buyer->exists($id)) {
			throw new NotFoundException(__('Invalid buyer'));
		}
		$options = array('conditions' => array('Buyer.' . $this->Buyer->primaryKey => $id));
		$this->set('buyer', $this->Buyer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Buyer->create();
			if ($this->Buyer->save($this->request->data)) {
				$this->Session->setFlash(__('バイヤーは正常に保存されました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('バイヤーは正常に保存されませんでしたので再度お試し下さい。'));
			}
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
		if (!$this->Buyer->exists($id)) {
			throw new NotFoundException(__('Invalid buyer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Buyer->save($this->request->data)) {
				$this->Session->setFlash(__('バイヤーは正常に保存されました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('バイヤーは正常に保存されませんでしたので再度お試し下さい。'));
			}
		} else {
			$options = array('conditions' => array('Buyer.' . $this->Buyer->primaryKey => $id));
			$this->request->data = $this->Buyer->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Buyer->id = $id;
		if (!$this->Buyer->exists()) {
			throw new NotFoundException(__('Invalid buyer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Buyer->delete()) {
			$this->Session->setFlash(__('バイヤーカテゴリーは正常に削除されました。'));
		} else {
			$this->Session->setFlash(__('バイヤーは正常に削除されませんでしたので再度お試し下さい。'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
