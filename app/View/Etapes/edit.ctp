<div class="etapes form">
<?php echo $this->Form->create('Etape'); ?>
	<fieldset>
		<legend><?php echo __('Edit Etape'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('CODE');
		echo $this->Form->input('libelle');
		echo $this->Form->input('niveau');
		echo $this->Form->input('description');
		echo $this->Form->input('type');
		echo $this->Form->input('fg_etat');
		echo $this->Form->input('parcour_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('groupe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Etape.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Etape.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Etapes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parcours'), array('controller' => 'parcours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parcour'), array('controller' => 'parcours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupes'), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe'), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Occurence Requettes'), array('controller' => 'occurence_requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Occurence Requette'), array('controller' => 'occurence_requettes', 'action' => 'add')); ?> </li>
	</ul>
</div>
