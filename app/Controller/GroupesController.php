<?php
App::uses('AppController', 'Controller');
/**
 * Groupes Controller
 *
 * @property Groupe $Groupe
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class GroupesController extends AppController {

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
    public $uses = array('Groupe','TableAudit');

/**
 * index method
 *
 * @return void
 */
	
	public function index() {
  
		$this->layout = 'boostraped'; 
//        $this->ShowMessage('test');
		$this->Groupe->recursive = 0; 
        $Groupes = $this->Groupe->find('all',array(
                                                 'conditions'=>array('Groupe.fg_etat'=>'N')));
		$this->set('Groupes',$Groupes);
        
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
		if (!$this->Groupe->exists($id)) {
			throw new NotFoundException(__('Invalid Groupe'));
		}
		$options = array('conditions' => array('Groupe.' . $this->Groupe->primaryKey => $id));
		$this->set('Groupe', $this->Groupe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'boostraped'; 
		if ($this->request->is('post')) {
			$this->Groupe->create();
			if ($this->Groupe->save($this->request->data)) {
                //Modification de l'etat de l'entité à nouveau
                $this->Groupe->savefield('fg_etat','N'); 
                
                //
                $this->auditer_ajout();
                
                
				     $this->ShowMessage('Groupe Enregistré !');
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
		if (!$this->Groupe->exists($id)) {
			throw new NotFoundException(__('Invalid Groupe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Groupe->save($this->request->data)) {
                $this->auditer_modif();
				$this->ShowMessage('Groupe Enregistré !');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
			}
		} else {
			$options = array('conditions' => array('Groupe.' . $this->Groupe->primaryKey => $id));
			$this->request->data = $this->Groupe->find('first', $options);
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
		$this->Groupe->id = $id;
		if (!$this->Groupe->exists()) {
			throw new NotFoundException(__('Invalid Groupe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Groupe->supprimer()) {
            $this->auditer_supress($id);
			$this->ShowMessage('Groupe Suprimé avec Success !!!');
            
		} else {
			$this->ShowError('Impossible d\'Effectué l\'operation');
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    
    public function auditer_ajout(){
        $user = $this->Session->read('Auth.User.id');
        $objet ='Groupe';
//        debug($this->request->data);
//          die();
        // recupere les données posté en type array 
        $valeur = $this->request->data['Groupe']['code'].'  : '.$this->request->data['Groupe']['nom'];
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
        $objet ='Groupe';
//        debug($this->request->data);
//          die();
        $valeur = $this->request->data['Groupe']['code'].'  : '.$this->request->data['Groupe']['nom'];
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
        $objet ='Groupe';
        $Groupe =$this->Groupe->findByid($id);
        $valeur = $Groupe['Groupe']['id'].'  : '.$Groupe['Groupe']['code'].'  : '.$Groupe['Groupe']['nom'];
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

