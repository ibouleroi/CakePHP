
<div class="row">
     <div class="col-sm-12">
        <h1 class="page-header">Liste des Types de Requttes</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                       
                           
                            
                            <?php echo $this->Html->link(__('Nouveau Type de Requette'), array('action' => 'add'),array('class'=>'btn btn-primary')); ?>
                            
                          
                                 
                                    <?php echo $this->Html->link(__('Liste des Produits'), array('controller'=>'Produits','action' => 'index')
                                                         ,array('class'=>'btn btn-default')); ?>
                                                         
                                 <?php echo $this->Html->link(__('Nouveau Produit'), array('controller'=>'Produits','action' => 'add')
                                                             ,array('class'=>'btn btn-default')); ?>
                                                             
                                    <?php echo $this->Html->link(__('Liste des Parcours'), array('controller'=>'Parcours','action' => 'index')
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
                                <th>code</th> 
                                <th>libelle</th> 
                                <th>descrtiption/th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                           </tr>
                     </thead>
					<?php foreach ($TypeRequettes as $TypeRequette): ?>
					<tr>
						<td><?php echo h($TypeRequette['TypeRequette']['id']); ?>&nbsp;</td>
						<td><?php echo h($TypeRequette['TypeRequette']['code']); ?>&nbsp;</td> 
						<td><?php echo h($TypeRequette['TypeRequette']['libelle']); ?>&nbsp;</td>   
						<td><?php echo h($TypeRequette['TypeRequette']['dscription']); ?>&nbsp;</td>
						<td class="actions"> 
							<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $TypeRequette['TypeRequette']['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $TypeRequette['TypeRequette']['id']), array('class'=>'btn btn-default'), __('Confirmez la Suppréssion de l\'employé : # %s?', $TypeRequette['TypeRequette']['id'])); ?>
							
							<?php echo $this->Html->link(__('List des Clients'), 
                                                         array('controller'=>'Clients','action' => 'listparemploye', $TypeRequette['TypeRequette']['id']),
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
        

