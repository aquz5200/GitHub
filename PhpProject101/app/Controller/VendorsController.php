<?php
App::uses('AppController', 'Controller');
/**
 * Vendors Controller
 *
 * @property Vendor $Vendor
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VendorsController extends AppController {

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
		$this->Vendor->recursive = 0;
		$this->set('vendors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vendor->exists($id)) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		$options = array('conditions' => array('Vendor.' . $this->Vendor->primaryKey => $id));
		$this->set('vendor', $this->Vendor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vendor->create();
			if ($this->Vendor->save($this->request->data)) {
				$this->Session->setFlash(__('ベンダー情報は正常に保存されました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('ベンダー情報は正常に保存されませんでしたので再度お試し下さい。'));
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
		if (!$this->Vendor->exists($id)) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vendor->save($this->request->data)) {
				$this->Session->setFlash(__('ベンダー情報は正常に保存されました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('ベンダー情報は正常に保存されませんでしたので再度お試し下さい。'));
			}
		} else {
			$options = array('conditions' => array('Vendor.' . $this->Vendor->primaryKey => $id));
			$this->request->data = $this->Vendor->find('first', $options);
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
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vendor->delete()) {
			$this->Session->setFlash(__('ベンダー情報は正常に削除されました。'));
		} else {
			$this->Session->setFlash(__('ベンダー情報は正常に削除されませんでしたので再度お試し下さい。'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
