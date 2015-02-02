<?php
App::uses('AppController', 'Controller');
/**
 * Instituciones Controller
 *
 * @property Institucione $Institucione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InstitucionesController extends AppController {

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
		$this->Institucione->recursive = 0;
		$this->set('instituciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Institucione->exists($id)) {
			throw new NotFoundException(__('Invalid institucione'));
		}
		$options = array('conditions' => array('Institucione.' . $this->Institucione->primaryKey => $id));
		$this->set('institucione', $this->Institucione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Institucione->create();
			if ($this->Institucione->save($this->request->data)) {
				$this->Session->setFlash(__('The institucione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institucione could not be saved. Please, try again.'));
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
		if (!$this->Institucione->exists($id)) {
			throw new NotFoundException(__('Invalid institucione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Institucione->save($this->request->data)) {
				$this->Session->setFlash(__('The institucione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institucione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Institucione.' . $this->Institucione->primaryKey => $id));
			$this->request->data = $this->Institucione->find('first', $options);
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
		$this->Institucione->id = $id;
		if (!$this->Institucione->exists()) {
			throw new NotFoundException(__('Invalid institucione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Institucione->delete()) {
			$this->Session->setFlash(__('The institucione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The institucione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
