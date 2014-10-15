<div class="produits form">
<?php echo $this->Form->create('Produit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Produit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero');
		echo $this->Form->input('libelle');
		echo $this->Form->input('description');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('fg_etat');
		echo $this->Form->input('url_image');
		echo $this->Form->input('lien_dscription');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Produit.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Produit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Produits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dette Snapshots'), array('controller' => 'dette_snapshots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dette Snapshot'), array('controller' => 'dette_snapshots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dettes'), array('controller' => 'dettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dette'), array('controller' => 'dettes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitions'), array('controller' => 'requisitions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisition'), array('controller' => 'requisitions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Souscriptions'), array('controller' => 'souscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Souscription'), array('controller' => 'souscriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Requettes'), array('controller' => 'type_requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Requette'), array('controller' => 'type_requettes', 'action' => 'add')); ?> </li>
	</ul>
</div>
