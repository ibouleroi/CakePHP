
<div class="row">
     <div class="col-sm-12">
        <h1 class="page-header">Liste des Parcours</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                       
                           
                            
                            <?php echo $this->Html->link(__('Nouveau Parcours'), array('action' => 'add'),array('class'=>'btn btn-primary')); ?>
                            
                          
                                 
                                    <?php echo $this->Html->link(__('Liste des Utilisateurs'), array('controller'=>'Users','action' => 'index')
                                                         ,array('class'=>'btn btn-default')); ?>
                                  
                                
                                    <?php echo $this->Html->link(__('liste des Parcours'), array('controller'=>'Parcours','action' => 'index')
                                                             ,array('class'=>'btn btn-default')); ?>
                                                             
                                                              <?php echo $this->Html->link(__('liste des Parcours'), array('controller'=>'Parcours','action' => 'index')
                                                             ,array('class'=>'btn btn-default')); ?>

                           
                                                         
                            
                             
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="maintable" class="table table-striped table-bordered table-hover"cellpadding="0" cellspacing="0">
					
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>code</th> 
                                <th>libelle</th> 
                                <th>description</th>  
                                <th class="actions"><?php echo __('Actions'); ?></th>
                           </tr>
                     </thead>
					<?php foreach ($Parcours as $Parcour): ?>
					<tr>
						<td><?php echo h($Parcour['Parcour']['id']); ?>&nbsp;</td>
						<td><?php echo h($Parcour['Parcour']['code']); ?>&nbsp;</td> 
						<td><?php echo h($Parcour['Parcour']['libelle']); ?>&nbsp;</td>  
						<td><?php echo h($Parcour['Parcour']['description']); ?>&nbsp;</td>   
						<td class="actions"> 
							<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $Parcour['Parcour']['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $Parcour['Parcour']['id']), array('class'=>'btn btn-default'), __('Confirmez la Suppréssion de l\'employé : # %s?', $Parcour['Parcour']['id'])); ?>
							
							<?php echo $this->Html->link(__('List des Membres'), 
                                                         array('controller'=>'Membres','action' => 'listparParcour', $Parcour['Parcour']['id']),
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
        

