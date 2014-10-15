 <div class="row">
     <div class="col-sm-12">
        <h1 class="page-header">Nouvel Employé</h1>
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
                 <?php echo $this->Form->create('Employee',array(
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

                                <?php echo $this->Form->input('matricule', array(
                                'placeholder' => 'matricule')); ?>

                                 <?php echo $this->Form->input('nom', array(
                                'placeholder' => 'nom')); ?>
                                
                                 <?php echo $this->Form->input('prenom', array(
                                'placeholder' => 'prenom')); ?>
                                
                                <?php echo $this->Form->input('departement_id', array(
                                'placeholder' => 'département')); ?>
                                
                                <?php echo $this->Form->input('emploi_id', array(
                                'placeholder' => 'poste',
                                        'label' => 'poste')); ?>
                                        
                                        <?php echo $this->Form->input('manager_id', array(
                                'placeholder' => 'manager')); ?>
                                
                                <?php echo $this->Form->input('mail', array(
                                'placeholder' => 'mail')); ?>
                                
                                <?php echo $this->Form->input('office_phone', array(
                                'placeholder' => 'N° Tel de Bureau')); ?>
                                
                                <?php echo $this->Form->input('cell_phone', array(
                                'placeholder' => 'N° Tel de Portable')); ?>
                                 
                                 

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