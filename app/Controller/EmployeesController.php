<?php
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EmployeesController extends AppController {

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
    public $uses = array('Employee','TableAudit');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->layout = 'boostraped'; 
		$this->Employee->recursive = 0; 
        
        $Employees = $this->Employee->find('all',array(
                                                 'conditions'=>array('Employee.fg_etat'=>'N')));
        
		$this->set('Employees',$Employees);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$this->set('employee', $this->Employee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
         $this->layout = 'boostraped'; 
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
                
                /// set fulllname of employee
              $fullname=  $this->request->data['Employee']['matricule']
                    .'  : '.$this->request->data['Employee']['nom']
                    .'  '.$this->request->data['Employee']['prenom'];
                
                $this->Employee->savefield('fg_etat','N');
                $this->Employee->savefield('fullname',$fullname);
                
                  $this->auditer_ajout();
                
                
				$this->ShowMessage('Employé Enregistré !');
                
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible d\'Effectué l\'operation');
			}
		}
		$departements = $this->Employee->Departement->find('list',array(
                                                 'conditions'=>array('Departement.fg_etat'=>'N')));
        
		$emplois = $this->Employee->Emploi->find('list',array(
                                                 'conditions'=>array('Emploi.fg_etat'=>'N')));
        
        $managers = $this->Employee->find('list',array(
                                                 'conditions'=>array('Employee.fg_etat'=>'N')));
        
		$this->set(compact('departements', 'emplois','managers'));
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
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Employee->save($this->request->data)) {
                
                /// set fulllname of employee
              $fullname=  $this->request->data['Employee']['matricule']
                    .'  : '.$this->request->data['Employee']['nom']
                    .'  '.$this->request->data['Employee']['prenom'];
                
                $this->Employee->savefield('fullname',$fullname);
                    
                    //auditer 
                $this->auditer_modif(); 
				$this->ShowMessage('L\'Employé a été Enregistré');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->ShowError('Impossible de terminé l\'operation');
			}
		} else {
			$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
			$this->request->data = $this->Employee->find('first', $options);
		}
        
		$departements = $this->Employee->Departement->find('list',array(
                                                 'conditions'=>array('Departement.fg_etat'=>'N')));
        
		$emplois = $this->Employee->Emploi->find('list',array(
                                                 'conditions'=>array('Emploi.fg_etat'=>'N')));
        
        $managers = $this->Employee->find('list',array(
                                                 'conditions'=>array('Employee.fg_etat'=>'N')));
        
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
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Employee->savefield('fg_etat','S')) {
            $this->auditer_supress($id);
			$this->ShowMessage('L\'Employé a été Supprimé avec Success');
		} else {
			$this->ShowError('Impossible de terminé l\'operation');
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    
    
        public function auditer_ajout(){
        $user = $this->Session->read('Auth.User.id');
        $objet ='Employee';
//        debug($this->request->data);
//          die();
        // recupere les données posté en type array 
        $valeur = $this->request->data['Employee']['matricule']
            .'  : '.$this->request->data['Employee']['nom']
            .'  '.$this->request->data['Employee']['prenom'];
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
        $objet ='Employee';
//        debug($this->request->data);
//          die();
        $valeur = $this->request->data['Employee']['matricule']
            .'  : '.$this->request->data['Employee']['nom']
            .'  '.$this->request->data['Employee']['prenom'];
        
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
        $objet ='Employee';
        $Employee =$this->Employee->findByid($id);
        $valeur = $Employee['Employee']['id'].'  : '
            .$Employee['Employee']['matricule']
            .'  : '.$Employee['Employee']['nom']
            .'  : '.$Employee['Employee']['prenom'];
        
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
