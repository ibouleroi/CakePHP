<div class="typeRequettes form">
<?php echo $this->Form->create('TypeRequette'); ?>
	<fieldset>
		<legend><?php echo __('Edit Type Requette'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('libelle');
		echo $this->Form->input('parcour_id');
		echo $this->Form->input('produit_id');
		echo $this->Form->input('url_mage');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TypeRequette.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TypeRequette.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Type Requettes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parcours'), array('controller' => 'parcours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parcour'), array('controller' => 'parcours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
	</ul>
</div>
