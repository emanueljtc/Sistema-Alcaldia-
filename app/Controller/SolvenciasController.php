<?php
App::uses('AppController', 'Controller');
/**
 * Solvencias Controller
 *
 * @property Solvencia $Solvencia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SolvenciasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $paginate = array (
			'limit' => 5,
			'order' => array('Solvencia.cedula' => 'desc')
			);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Solvencia->recursive = 0;
		$this->Paginator->settings =$this->paginate;
		$this->set('solvencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Solvencia->exists($id)) {
			throw new NotFoundException(__('Invalid solvencia'));
		}
		$options = array('conditions' => array('Solvencia.' . $this->Solvencia->primaryKey => $id));
		$this->set('solvencia', $this->Solvencia->find('first', $options));
		
		}
	



/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Solvencia->create();
			if ($this->Solvencia->save($this->request->data)) {
				$this->Session->setFlash(__('The solvencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solvencia could not be saved. Please, try again.'));
			}
		}
		$instituciones = $this->Solvencia->Instituciones->find('list');
		
		$this->set(compact('instituciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Solvencia->exists($id)) {
			throw new NotFoundException(__('Invalid solvencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Solvencia->save($this->request->data)) {
				$this->Session->setFlash(__('The solvencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solvencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Solvencia.' . $this->Solvencia->primaryKey => $id));
			$this->request->data = $this->Solvencia->find('first', $options);
		}
		$instituciones = $this->Solvencia->Instituciones->find('list');
		
		$this->set(compact('instituciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Solvencia->id = $id;
		if (!$this->Solvencia->exists()) {
			throw new NotFoundException(__('Invalid solvencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Solvencia->delete()) {
			$this->Session->setFlash(__('The solvencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The solvencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
