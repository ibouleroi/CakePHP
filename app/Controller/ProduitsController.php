<?php
App::uses('AppController', 'Controller');
/**
 * Produits Controller
 *
 * @property Produit $Produit
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProduitsController extends AppController {

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
    public $uses = array('Produit','TableAudit');

/**
 * index method
 *
 * @return void
 */
	
	public function index() {
  
		$this->layout = 'boostraped'; 
//        $this->ShowMessage('test');
		$this->Produit->recursive = 0; 
        $Produits = $this->Produit->find('all',array(
                                                 'conditions'=>array('Produit.fg_etat'=>'N')));
		$this->set('Produits',$Produits);
        
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
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid Produit'));
		}
		$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
		$this->set('Produit', $this->Produit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'boostraped'; 
		if ($this->request->is('post')) {
			$this->Produit->create();
			if ($this->Produit->save($this->request->data)) {
                //Modification de l'etat de l'entité à nouveau
                debug($this->request->data);
                die();
                
                $this->Produit->savefield('fg_etat','N'); 
                
                //
                $this->auditer_ajout();
                
                
				     $this->ShowMessage('Produit Enregistré !');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
			}
		}
        
         $parents = $this->Produit->find('list',array(
                                                 'conditions'=>array('Produit.fg_etat'=>'N')));
        
		$this->set(compact('parents'));
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
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid Produit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produit->save($this->request->data)) {
                $this->auditer_modif();
				$this->ShowMessage('Produit Enregistré !!!');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
			}
		} else {
			$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
			$this->request->data = $this->Produit->find('first', $options);
		}
        
         $parents = $this->Produit->find('list',array(
                                                 'conditions'=>array('Produit.fg_etat'=>'N')));
        
		$this->set(compact('parents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Produit->id = $id;
		if (!$this->Produit->exists()) {
			throw new NotFoundException(__('Invalid Produit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produit->supprimer()) {
            $this->auditer_supress($id);
			$this->ShowMessage('Produit Suprimé avec Success !!!');
            
		} else {
			$this->ShowError('Impossible d\'Effectué l\'operation');
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    
    public function auditer_ajout(){
        $user = $this->Session->read('Auth.User.id');
        $objet ='Produit';
//        debug($this->request->data);
//          die();
        // recupere les données posté en type array 
        $valeur = $this->request->data['Produit']['code'].'  : '.$this->request->data['Produit']['libelle'];
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
        $objet ='Produit';
//        debug($this->request->data);
//          die();
        $valeur = $this->request->data['Produit']['code'].'  : '.$this->request->data['Produit']['libelle'];
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
        $objet ='Produit';
        $Produit =$this->Produit->findByid($id);
        $valeur = $Produit['Produit']['id'].'  : '.$Produit['Produit']['code'].'  : '.$Produit['Produit']['libelle'];
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
