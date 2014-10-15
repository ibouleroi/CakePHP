<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('profile_id');
		echo $this->Form->input('employee_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapes'), array('controller' => 'etapes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etape'), array('controller' => 'etapes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Occurence Requettes'), array('controller' => 'occurence_requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Occurence Requette'), array('controller' => 'occurence_requettes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requettes'), array('controller' => 'requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requette'), array('controller' => 'requettes', 'action' => 'add')); ?> </li>
	</ul>
</div>
