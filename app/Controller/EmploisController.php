<?php
App::uses('AppController', 'Controller');
/**
 * Emplois Controller
 *
 * @property Emplois $Emplois
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EmploisController extends AppController {

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
    public $uses = array('Emploi','TableAudit');

/**
 * index method
 *
 * @return void
 */
	
	public function index() {
  
		$this->layout = 'boostraped'; 
//        $this->ShowMessage('test');
		$this->Emploi->recursive = 0; 
        $Emplois = $this->Emploi->find('all',array(
                                                 'conditions'=>array('Emploi.fg_etat'=>'N')));
		$this->set('Emplois',$Emplois);
        
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
		if (!$this->Emploi->exists($id)) {
			throw new NotFoundException(__('Invalid Emploi'));
		}
		$options = array('conditions' => array('Emploi.' . $this->Emploi->primaryKey => $id));
		$this->set('Emploi', $this->Emploi->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'boostraped'; 
		if ($this->request->is('post')) {
			$this->Emploi->create();
			if ($this->Emploi->save($this->request->data)) {
                //Modification de l'etat de l'entité à nouveau
                $this->Emploi->savefield('fg_etat','N'); 
                
                //
                $this->auditer_ajout();
                
                
				     $this->ShowMessage('Emploi Enregistré !');
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
		if (!$this->Emploi->exists($id)) {
			throw new NotFoundException(__('Invalid Emploi'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Emploi->save($this->request->data)) {
                $this->auditer_modif();
				$this->ShowMessage('Emploi Enregistré !');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
			}
		} else {
			$options = array('conditions' => array('Emploi.' . $this->Emploi->primaryKey => $id));
			$this->request->data = $this->Emploi->find('first', $options);
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
		$this->Emploi->id = $id;
		if (!$this->Emploi->exists()) {
			throw new NotFoundException(__('Invalid Emploi'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Emploi->savefield('fg_etat','S')) {
            $this->auditer_supress($id);
			$this->ShowMessage('Emploi Suprimé avec Success !!!');
            
		} else {
			$this->ShowError('Impossible d\'Effectué l\'operation');
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    
    public function auditer_ajout(){
        $user = $this->Session->read('Auth.User.id');
        $objet ='Emploi';
//        debug($this->request->data);
//          die();
        // recupere les données posté en type array 
        $valeur = $this->request->data['Emploi']['code'].'  : '.$this->request->data['Emploi']['nom'];
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
        $objet ='Emploi';
//        debug($this->request->data);
//          die();
        $valeur = $this->request->data['Emploi']['code'].'  : '.$this->request->data['Emploi']['nom'];
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
        $objet ='Emploi';
        $Emploi =$this->Emploi->findByid($id);
        $valeur = $Emploi['Emploi']['id'].'  : '.$Emploi['Emploi']['code'].'  : '.$Emploi['Emploi']['nom'];
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

