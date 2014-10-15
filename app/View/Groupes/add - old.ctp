<div class="groupes form">
<?php echo $this->Form->create('Groupe'); ?>
	<fieldset>
		<legend><?php echo __('Add Groupe'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('nom');
		echo $this->Form->input('description');
		echo $this->Form->input('nb_users');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Groupes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Etapes'), array('controller' => 'etapes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etape'), array('controller' => 'etapes', 'action' => 'add')); ?> </li>
	</ul>
</div>
