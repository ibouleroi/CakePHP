
<div class="row">
     <div class="col-sm-12">
        <h1 class="page-header">Liste des Groupes</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                       
                           
                            
                            <?php echo $this->Html->link(__('Nouveau Groupe'), array('action' => 'add'),array('class'=>'btn btn-primary')); ?>
                            
                          
                                 
                                    <?php echo $this->Html->link(__('Liste des Utilisateurs'), array('controller'=>'Users','action' => 'index')
                                                         ,array('class'=>'btn btn-default')); ?>
                                  
                                
                                    <?php echo $this->Html->link(__('Nouvel Utilisateur'), array('controller'=>'Users','action' => 'add')
                                                             ,array('class'=>'btn btn-default')); ?>

                           
                                                         
                            
                             
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="maintable" class="table table-striped table-bordered table-hover"cellpadding="0" cellspacing="0">
					
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>code</th> 
                                <th>nom</th> 
                                <th>description</th>  
                                <th class="actions"><?php echo __('Actions'); ?></th>
                           </tr>
                     </thead>
					<?php foreach ($Groupes as $Groupe): ?>
					<tr>
						<td><?php echo h($Groupe['Groupe']['id']); ?>&nbsp;</td>
						<td><?php echo h($Groupe['Groupe']['code']); ?>&nbsp;</td> 
						<td><?php echo h($Groupe['Groupe']['nom']); ?>&nbsp;</td>  
						<td><?php echo h($Groupe['Groupe']['description']); ?>&nbsp;</td>   
						<td class="actions"> 
							<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $Groupe['Groupe']['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $Groupe['Groupe']['id']), array('class'=>'btn btn-default'), __('Confirmez la Suppréssion de l\'employé : # %s?', $Groupe['Groupe']['id'])); ?>
							
							<?php echo $this->Html->link(__('List des Membres'), 
                                                         array('controller'=>'Membres','action' => 'listpargroupe', $Groupe['Groupe']['id']),
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
        

