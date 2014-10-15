<?php
App::uses('AppController', 'Controller');
/**
 * TypeRequettes Controller
 *
 * @property TypeRequette $TypeRequette
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TypeRequettesController extends AppController {

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
    public $uses = array('TypeRequette','TableAudit');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->layout = 'boostraped'; 
		$this->TypeRequette->recursive = 0; 
        
        $TypeRequettes = $this->TypeRequette->find('all',array(
                                                 'conditions'=>array('TypeRequette.fg_etat'=>'N')));
        
		$this->set('TypeRequettes',$TypeRequettes);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeRequette->exists($id)) {
			throw new NotFoundException(__('Invalid TypeRequette'));
		}
		$options = array('conditions' => array('TypeRequette.' . $this->TypeRequette->primaryKey => $id));
		$this->set('TypeRequette', $this->TypeRequette->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
         $this->layout = 'boostraped'; 
		if ($this->request->is('post')) {
			$this->TypeRequette->create();
			if ($this->TypeRequette->save($this->request->data)) {
                
                /// set fulllname of TypeRequette
                
//              $fullname=  $this->request->data['TypeRequette']['matricule']
//                    .'  : '.$this->request->data['TypeRequette']['nom']
//                    .'  '.$this->request->data['TypeRequette']['prenom'];
                
                $this->TypeRequette->savefield('fg_etat','N');
//                $this->TypeRequette->savefield('fullname',$fullname);
                
                  $this->auditer_ajout();
                
                
				$this->ShowMessage('Employé Enregistré !');
                
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
			}
		}
		$produits = $this->TypeRequette->Produit->find('list',array(
                                                 'conditions'=>array('Produit.fg_etat'=>'N')));
        
		$parcours = $this->TypeRequette->Parcour->find('list',array(
                                                 'conditions'=>array('Parcour.fg_etat'=>'N')));
        
         
        
		$this->set(compact('produits', 'parcours'));
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
		if (!$this->TypeRequette->exists($id)) {
			throw new NotFoundException(__('Invalid TypeRequette'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypeRequette->save($this->request->data)) {
                
                /// set fulllname of TypeRequette
              $fullname=  $this->request->data['TypeRequette']['matricule']
                    .'  : '.$this->request->data['TypeRequette']['nom']
                    .'  '.$this->request->data['TypeRequette']['prenom'];
                
                $this->TypeRequette->savefield('fullname',$fullname);
                    
                    //auditer 
                $this->auditer_modif(); 
				$this->ShowMessage('L\'Employé a été Enregistré');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible de terminé l\'operation');
			}
		} else {
			$options = array('conditions' => array('TypeRequette.' . $this->TypeRequette->primaryKey => $id));
			$this->request->data = $this->TypeRequette->find('first', $options);
		}
        
		$departements = $this->TypeRequette->Departement->find('list',array(
                                                 'conditions'=>array('Departement.fg_etat'=>'N')));
        
		$emplois = $this->TypeRequette->Emploi->find('list',array(
                                                 'conditions'=>array('Emploi.fg_etat'=>'N')));
        
        $managers = $this->TypeRequette->find('list',array(
                                                 'conditions'=>array('TypeRequette.fg_etat'=>'N')));
        
		$this->set(compact('departements', 'emplois','managers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TypeRequette->id = $id;
		if (!$this->TypeRequette->exists()) {
			throw new NotFoundException(__('Invalid TypeRequette'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TypeRequette->savefield('fg_etat','S')) {
            $this->auditer_supress($id);
			$this->ShowMessage('L\'Employé a été Supprimé avec Success');
		} else {
			$this->ShowError('Impossible de terminé l\'operation');
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    
    
        public function auditer_ajout(){
        $user = $this->Session->read('Auth.User.id');
        $objet ='TypeRequette';
//        debug($this->request->data);
//          die();
        // recupere les données posté en type array 
        $valeur = $this->request->data['TypeRequette']['matricule']
            .'  : '.$this->request->data['TypeRequette']['nom']
            .'  '.$this->request->data['TypeRequette']['prenom'];
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
        $objet ='TypeRequette';
//        debug($this->request->data);
//          die();
        $valeur = $this->request->data['TypeRequette']['matricule']
            .'  : '.$this->request->data['TypeRequette']['nom']
            .'  '.$this->request->data['TypeRequette']['prenom'];
        
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
        $objet ='TypeRequette';
        $TypeRequette =$this->TypeRequette->findByid($id);
        $valeur = $TypeRequette['TypeRequette']['id'].'  : '
            .$TypeRequette['TypeRequette']['matricule']
            .'  : '.$TypeRequette['TypeRequette']['nom']
            .'  : '.$TypeRequette['TypeRequette']['prenom'];
        
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

