<div class="parcours form">
<?php echo $this->Form->create('Parcour'); ?>
	<fieldset>
		<legend><?php echo __('Add Parcour'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('libelle');
		echo $this->Form->input('description');
		echo $this->Form->input('fg_etat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Parcours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Requettes'), array('controller' => 'type_requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Requette'), array('controller' => 'type_requettes', 'action' => 'add')); ?> </li>
	</ul>
</div>
