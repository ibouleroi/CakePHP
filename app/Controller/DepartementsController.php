<?php
App::uses('AppController', 'Controller');
/**
 * Departements Controller
 *
 * @property Departement $Departement
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DepartementsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Paginator');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
    public $uses = array('Departement','TableAudit');

/**
 * index method
 *
 * @return void
 */
	
	public function index() {
  
		$this->layout = 'boostraped'; 
//        $this->ShowMessage('test');
		$this->Departement->recursive = 0; 
        $departements = $this->Departement->find('all',array(
                                                 'conditions'=>array('Departement.fg_etat'=>'N')));
		$this->set('departements',$departements);
        
        //return $this->redirect(array('plugin' => 'BoostCake','controller' => 'BoostCake','action' => 'index'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Departement->exists($id)) {
			throw new NotFoundException(__('Invalid departement'));
		}
		$options = array('conditions' => array('Departement.' . $this->Departement->primaryKey => $id));
		$this->set('departement', $this->Departement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'boostraped'; 
		if ($this->request->is('post')) {
			$this->Departement->create();
			if ($this->Departement->save($this->request->data)) {
                //Modification de l'etat de l'entité à nouveau
                $this->Departement->savefield('fg_etat','N'); 
                
                //
                $this->auditer_ajout();
                
                
				     $this->ShowMessage('Département Enregistré !');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
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
        $this->layout = 'boostraped'; 
		if (!$this->Departement->exists($id)) {
			throw new NotFoundException(__('Invalid departement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Departement->save($this->request->data)) {
                $this->auditer_modif();
				$this->ShowMessage('Département Enregistré !');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
			}
		} else {
			$options = array('conditions' => array('Departement.' . $this->Departement->primaryKey => $id));
			$this->request->data = $this->Departement->find('first', $options);
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
		$this->Departement->id = $id;
		if (!$this->Departement->exists()) {
			throw new NotFoundException(__('Invalid departement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Departement->supprimer()) {
            $this->auditer_supress($id);
			$this->ShowMessage('Département Suprimé avec Success !!!');
            
		} else {
			$this->ShowError('Impossible d\'Effectué l\'operation');
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    
    public function auditer_ajout(){
        $user = $this->Session->read('Auth.User.id');
        $objet ='Departement';
//        debug($this->request->data);
//          die();
        // recupere les données posté en type array 
        $valeur = $this->request->data['Departement']['code'].'  : '.$this->request->data['Departement']['nom'];
        $operation ='Insert'; 
        
        $TableAudit = array(
            'TableAudit'=>array(
                'objet'=>$objet,
                'valeur'=>$valeur,
                'user'=>$user,
                'operation'=>$operation
            )
        );
        $this->TableAudit->save($TableAudit);
        
    }
    
    public function auditer_modif(){
        $user = $this->Session->read('Auth.User.id');
        $objet ='Departement';
//        debug($this->request->data);
//          die();
        $valeur = $this->request->data['Departement']['code'].'  : '.$this->request->data['Departement']['nom'];
        $operation ='Udate'; 
        
         $TableAudit = array(
            'TableAudit'=>array(
                'objet'=>$objet,
                'valeur'=>$valeur,
                'user'=>$user,
                'operation'=>$operation
            )
        );          
        $this->TableAudit->save($TableAudit);
        
    }
    
     public function auditer_supress($id=false){
        $user = $this->Session->read('Auth.User.id');
        $objet ='Departement';
        $Departement =$this->Departement->findByid($id);
        $valeur = $Departement['Departement']['id'].'  : '.$Departement['Departement']['code'].'  : '.$Departement['Departement']['nom'];
//        debug($valeur);
//         die();
        $operation ='delete'; 
        
         $TableAudit = array(
            'TableAudit'=>array(
                'objet'=>$objet,
                'valeur'=>$valeur,
                'user'=>$user,
                'operation'=>$operation
            )
        );          
        $this->TableAudit->save($TableAudit);
        
    }
        
}
