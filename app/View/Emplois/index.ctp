
<div class="row">
     <div class="col-sm-12">
        <h1 class="page-header">Emplois</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                            <?php echo $this->Html->link(__('Nouvel Emploi'), array('action' => 'add'),array('class'=>'btn btn-primary')); ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="maintable" class="table table-striped table-bordered table-hover"cellpadding="0" cellspacing="0">
					
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>code</th> 
                                <th>nom</th> 
                                <th class="actions"><?php echo __('Actions'); ?></th>
                           </tr>
                     </thead>
					<?php foreach ($Emplois as $Emploi): ?>
					<tr>
						<td><?php echo h($Emploi['Emploi']['id']); ?>&nbsp;</td>
						<td><?php echo h($Emploi['Emploi']['code']); ?>&nbsp;</td> 
						<td><?php echo h($Emploi['Emploi']['nom']); ?>&nbsp;</td>  
						<td class="actions"> 
							<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $Emploi['Emploi']['id']),array('class'=>'btn btn-default')); ?>
							<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $Emploi['Emploi']['id']), array('class'=>'btn btn-default'), __('Confirmez la Suppréssion du département : # %s?', $Emploi['Emploi']['id'])); ?>
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
        

