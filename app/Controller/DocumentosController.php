<?php
App::uses('AppController', 'Controller');
/**
 * Documentos Controller
 *
 * @property Documento $Documento
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DocumentosController extends AppController {

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
		$this->Documento->recursive = 0;
		$this->set('documentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Documento->exists($id)) {
			throw new NotFoundException(__('Invalid documento'));
		}
		$options = array('conditions' => array('Documento.' . $this->Documento->primaryKey => $id));
		$this->set('documento', $this->Documento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Documento->create();
			if ($this->Documento->save($this->request->data)) {
				$this->Session->setFlash(__('The documento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documento could not be saved. Please, try again.'));
			}
		}
		$solvencias = $this->Documento->Solvencia->find('list');
		
		$this->set(compact('solvencias'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Documento->exists($id)) {
			throw new NotFoundException(__('Invalid documento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Documento->save($this->request->data)) {
				$this->Session->setFlash(__('The documento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Documento.' . $this->Documento->primaryKey => $id));
			$this->request->data = $this->Documento->find('first', $options);
		}
		$solvencias = $this->Documento->Solvencia->find('list');
		
		$this->set(compact('solvencias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Documento->id = $id;
		if (!$this->Documento->exists()) {
			throw new NotFoundException(__('Invalid documento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Documento->delete()) {
			$this->Session->setFlash(__('The documento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The documento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function create_pdf(){
 
    $users = $this->User->find('all');
 
    $this->set(compact('users'));
 
    $this->layout = '/pdf/default';
 
    $this->render('/Pdf/my_pdf_view');
 
}

}
