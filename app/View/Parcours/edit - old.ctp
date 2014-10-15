<div class="parcours form">
<?php echo $this->Form->create('Parcour'); ?>
	<fieldset>
		<legend><?php echo __('Edit Parcour'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Parcour.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Parcour.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parcours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Requettes'), array('controller' => 'type_requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Requette'), array('controller' => 'type_requettes', 'action' => 'add')); ?> </li>
	</ul>
</div>
