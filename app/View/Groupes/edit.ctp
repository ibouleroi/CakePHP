 <div class="row">
     <div class="col-sm-12">
        <h1 class="page-header">Edition du Groupe</h1>
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
                 <?php echo $this->Form->create('Groupe',array(
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

                                 <?php echo $this->Form->input('nom', array(
                                'placeholder' => 'nom')); ?>
                                
                                 <div class="row col-md-offset-3">
                                         <ul class="nav nav-tabs">
                                            <li class="active"><a href="#description-tab" data-toggle="tab">Description <i class="fa"></i></a></li>
                                            <li><a href="#membres-tab" data-toggle="tab">Membres <i class="fa"></i></a></li>
                                          </ul>
                                       <div class="tab-content">
                                           <div class="tab-pane active" id="description-tab">
                                               <?php echo $this->Form->input('description', array(
                                                            'placeholder' => 'description',
                                                                    'label'=>false,
                                                                    'type'=>'textarea',
                                                                    'wrapInput' => 'col col-md-12')); ?>
                                           </div>
                                           <div class="tab-pane" id="membres-tab">
                                               <?php echo $this->Form->input('description', array(
                                                            'placeholder' => 'description',
                                                                    'label'=>' ')); ?>
                                           </div>
                                       </div>
                                 </div>
                                
                                  
                                  

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