<?php
App::uses('AppController', 'Controller');
/**
 * Etapes Controller
 *
 * @property Etape $Etape
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EtapesController extends AppController {

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
		$this->Etape->recursive = 0;
		$this->set('etapes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Etape->exists($id)) {
			throw new NotFoundException(__('Invalid etape'));
		}
		$options = array('conditions' => array('Etape.' . $this->Etape->primaryKey => $id));
		$this->set('etape', $this->Etape->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Etape->create();
			if ($this->Etape->save($this->request->data)) {
				$this->Session->setFlash(__('The etape has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etape could not be saved. Please, try again.'));
			}
		}
		$parcours = $this->Etape->Parcour->find('list');
		$users = $this->Etape->User->find('list');
		$groupes = $this->Etape->Groupe->find('list');
		$this->set(compact('parcours', 'users', 'groupes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Etape->exists($id)) {
			throw new NotFoundException(__('Invalid etape'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Etape->save($this->request->data)) {
				$this->Session->setFlash(__('The etape has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etape could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Etape.' . $this->Etape->primaryKey => $id));
			$this->request->data = $this->Etape->find('first', $options);
		}
		$parcours = $this->Etape->Parcour->find('list');
		$users = $this->Etape->User->find('list');
		$groupes = $this->Etape->Groupe->find('list');
		$this->set(compact('parcours', 'users', 'groupes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Etape->id = $id;
		if (!$this->Etape->exists()) {
			throw new NotFoundException(__('Invalid etape'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Etape->delete()) {
			$this->Session->setFlash(__('The etape has been deleted.'));
		} else {
			$this->Session->setFlash(__('The etape could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
