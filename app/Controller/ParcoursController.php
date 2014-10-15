<?php
App::uses('AppController', 'Controller');
/**
 * Parcours Controller
 *
 * @property Parcour $Parcour
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ParcoursController extends AppController {

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
    public $uses = array('Parcour','TableAudit');

/**
 * index method
 *
 * @return void
 */
	
	public function index() {
  
		$this->layout = 'boostraped'; 
//        $this->ShowMessage('test');
		$this->Parcour->recursive = 0; 
        $Parcours = $this->Parcour->find('all',array(
                                                 'conditions'=>array('Parcour.fg_etat'=>'N')));
		$this->set('Parcours',$Parcours);
        
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
		if (!$this->Parcour->exists($id)) {
			throw new NotFoundException(__('Invalid Parcour'));
		}
		$options = array('conditions' => array('Parcour.' . $this->Parcour->primaryKey => $id));
		$this->set('Parcour', $this->Parcour->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'boostraped'; 
		if ($this->request->is('post')) {
			$this->Parcour->create();
			if ($this->Parcour->save($this->request->data)) {
                //Modification de l'etat de l'entité à nouveau
                $this->Parcour->savefield('fg_etat','N'); 
                
                //
                $this->auditer_ajout();
                
                
				     $this->ShowMessage('Parcour Enregistré !');
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
		if (!$this->Parcour->exists($id)) {
			throw new NotFoundException(__('Invalid Parcour'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parcour->save($this->request->data)) {
                $this->auditer_modif();
				$this->ShowMessage('Parcour Enregistré !');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
			}
		} else {
			$options = array('conditions' => array('Parcour.' . $this->Parcour->primaryKey => $id));
			$this->request->data = $this->Parcour->find('first', $options);
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
		$this->Parcour->id = $id;
		if (!$this->Parcour->exists()) {
			throw new NotFoundException(__('Invalid Parcour'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Parcour->supprimer()) {
            $this->auditer_supress($id);
			$this->ShowMessage('Parcour Suprimé avec Success !!!');
            
		} else {
			$this->ShowError('Impossible d\'Effectué l\'operation');
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    
    public function auditer_ajout(){
        $user = $this->Session->read('Auth.User.id');
        $objet ='Parcour';
//        debug($this->request->data);
//          die();
        // recupere les données posté en type array 
        $valeur = $this->request->data['Parcour']['code'].'  : '.$this->request->data['Parcour']['libelle'];
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
        $objet ='Parcour';
//        debug($this->request->data);
//          die();
        $valeur = $this->request->data['Parcour']['code'].'  : '.$this->request->data['Parcour']['libelle'];
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
        $objet ='Parcour';
        $Parcour =$this->Parcour->findByid($id);
        $valeur = $Parcour['Parcour']['id'].'  : '.$Parcour['Parcour']['code'].'  : '.$Parcour['Parcour']['libelle'];
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
