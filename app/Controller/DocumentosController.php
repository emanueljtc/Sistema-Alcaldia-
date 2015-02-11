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
	public $helpers = array('Html','Form','Time','Js');
	public $components = array('Paginator', 'Session','RequestHandler');
	public $paginate = array (
			'limit' => 5,
			'order' => array('Documento.id' => 'asc')
			);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
        	$this->set('documentos',$this->Documento->find('all'));
        	$this->Paginator->settings =$this->paginate;
		    $this->set('documentos',$this->paginate());
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
			throw new NotFoundException(__('Documento No Existe'));
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
				$this->Session->setFlash(__('Documento Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Documento no Guardado, Intente de Nuevo.'));
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
			throw new NotFoundException(__('Documento No Existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Documento->save($this->request->data)) {
				$this->Session->setFlash(__('Documento Actualizado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Documento no Actualizado, Intente de Nuevo.'));
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
			throw new NotFoundException(__('Documento no Existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Documento->delete()) {
			$this->Session->setFlash(__('Documento Eliminado.'));
		} else {
			$this->Session->setFlash(__('Documento no Eliminado. Intente de nuevo'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function buscar(){
	$this->Documento->find('all', 
		array('conditions'=>array('Documento.nombre'=>$this->request->data['Documento']['nombre'])));
	}
	
}
