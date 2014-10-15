 <div class="row">
     <div class="col-sm-12">
        <h1 class="page-header">Nouveau Produits</h1>
    </div>
                <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-sm-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                         <h1></h1>
            </div>
            <div class="panel-body">
                 <?php echo $this->Form->create('Produit',array(
                            'inputDefaults' => array(
                                'div' => 'form-group',
                                'label' => array(
                                    'class' => 'col col-md-3 control-label'
                                ),
                                'wrapInput' => 'col col-md-9',
                                'class' => 'form-control'
                            ),
                            'class' => 'form-horizontal'
                        )); ?>

                                <?php echo $this->Form->input('code', array(
                                'placeholder' => 'code')); ?>

                                 <?php echo $this->Form->input('libelle', array(
                                'placeholder' => 'libelle')); ?>
                                
                                
                                
                                <?php echo $this->Form->input('Requisition', array(
                                                            'placeholder' => 'Selectionnez un ou plusieurs produits requis',
                                                                    'label'=>'Produits Requis',
                                                                    'options'=>$parents,
                                                                    'multiple'=>true, 'id'=>'requisitions')); ?> 
                                                                    
                                                                    
                                                                     <?php echo $this->Form->input('lien_dscription', array(
                                                                        'placeholder' => 'url de description',
                                                                                'type'=>'text')); ?>
                                                                    
                                                                    
                                                                    
                                               <?php echo $this->Form->input('description', array(
                                                            'placeholder' => 'description', 
                                                                    'type'=>'textarea', )); ?>
                                
<!--
                                 <div class="row col-md-offset-3">
                                         <ul class="nav nav-tabs">
                                            <li class="active"><a href="#description-tab" data-toggle="tab">Description <i class="fa"></i></a></li>
                                            <li><a href="#produitrequiss-tab" data-toggle="tab">Prodtuits Requis <i class="fa"></i></a></li>
                                          </ul>
                                       <div class="tab-content">
                                           <
                                           </div>
                                           <div class="tab-pane" id="produitrequiss-tab">
                                                
                                           </div>
                                       </div>
                                 </div>
                                
-->
                                  
                                  

                                <div class="form-group panel-footer ">
                                    <?php echo $this->Html->link(__('Annuler'), array('action' => 'index'),array('class'=>'col col-md-2 btn btn-default pull-right')); ?>
                                <?php echo $this->Form->submit('Enregistrer', array(
                                    'div' => 'col col-md-2 col-md-offset-3 pull-right',
                                    'class' => 'btn btn-primary '
                                )); ?> 

                            </div>


                        <?php echo $this->Form->end(); ?>
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


                        });
    
           
    </script>