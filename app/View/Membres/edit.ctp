<div class="membres form">
<?php echo $this->Form->create('Membre'); ?>
	<fieldset>
		<legend><?php echo __('Edit Membre'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('groupe_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Membre.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Membre.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groupes'), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe'), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
