
<div class="row">
     <div class="col-sm-12">
        <h1 class="page-header">Liste des Employés</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                       
                           
                            
                            <?php echo $this->Html->link(__('Nouvel Employé'), array('action' => 'add'),array('class'=>'btn btn-primary')); ?>
                            
                          
                                 
                                    <?php echo $this->Html->link(__('Liste des Départements'), array('controller'=>'Departements','action' => 'index')
                                                         ,array('class'=>'btn btn-default')); ?>
                                 
                                    <?php echo $this->Html->link(__('Liste des Postes'), array('controller'=>'Emplois','action' => 'index')
                                                             ,array('class'=>'btn btn-default')); ?>
                                
                                    <?php echo $this->Html->link(__('Nouveau Poste'), array('controller'=>'Emplois','action' => 'add')
                                                             ,array('class'=>'btn btn-default')); ?>

                           
                                                         
                            
                             
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="maintable" class="table table-striped table-bordered table-hover"cellpadding="0" cellspacing="0">
					
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>marticule</th> 
                                <th>nom</th> 
                                <th>prénom</th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                           </tr>
                     </thead>
					<?php foreach ($Employees as $Employee): ?>
					<tr>
						<td><?php echo h($Employee['Employee']['id']); ?>&nbsp;</td>
						<td><?php echo h($Employee['Employee']['matricule']); ?>&nbsp;</td> 
						<td><?php echo h($Employee['Employee']['nom']); ?>&nbsp;</td>   
						<td><?php echo h($Employee['Employee']['prenom']); ?>&nbsp;</td>
						<td class="actions"> 
							<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $Employee['Employee']['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $Employee['Employee']['id']), array('class'=>'btn btn-default'), __('Confirmez la Suppréssion de l\'employé : # %s?', $Employee['Employee']['id'])); ?>
							
							<?php echo $this->Html->link(__('List des Clients'), 
                                                         array('controller'=>'Clients','action' => 'listparemploye', $Employee['Employee']['id']),
                                                         array('class'=>'btn btn-default')); ?> 
						</td>
					</tr>

				<?php endforeach; ?>
					</table>

                    
                </div>
            
            </div>
        </div>
    </div>
</div>



  <script type="text/javascript">

         $(document).ready(function() {

              var ViewModel = function() {
                   this.isOpen = ko.observable(false);
                };

                ko.applyBindings(new ViewModel());

                $('#maintable').dataTable();
                        });
    
           
    </script>
        

