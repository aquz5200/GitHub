<?php
App::uses('AppController', 'Controller');
/**
 * Stores Controller
 *
 * @property Store $Store
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StoresController extends AppController {

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
		$this->Store->recursive = 0;
		$this->set('stores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Store->exists($id)) {
			throw new NotFoundException(__('Invalid store'));
		}
		$options = array('conditions' => array('Store.' . $this->Store->primaryKey => $id));
		$this->set('store', $this->Store->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Store->create();
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('店舗情報は正常に保存されました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('店舗情報は正常に保存されませんでしたので再度お試し下さい。'));
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
		if (!$this->Store->exists($id)) {
			throw new NotFoundException(__('Invalid store'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('店舗情報は正常に保存されました。'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('店舗情報は正常に保存されませんでしたので再度お試し下さい。'));
			}
		} else {
			$options = array('conditions' => array('Store.' . $this->Store->primaryKey => $id));
			$this->request->data = $this->Store->find('first', $options);
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
		$this->Store->id = $id;
		if (!$this->Store->exists()) {
			throw new NotFoundException(__('Invalid store'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Store->delete()) {
			$this->Session->setFlash(__('店舗情報は正常に削除されました。'));
		} else {
			$this->Session->setFlash(__('店舗情報は正常に削除されませんでしたので再度お試し下さい。'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
