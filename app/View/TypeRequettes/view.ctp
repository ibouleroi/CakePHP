<div class="typeRequettes view">
<h2><?php echo __('Type Requette'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeRequette['TypeRequette']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($typeRequette['TypeRequette']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($typeRequette['TypeRequette']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($typeRequette['TypeRequette']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Libelle'); ?></dt>
		<dd>
			<?php echo h($typeRequette['TypeRequette']['libelle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parcour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($typeRequette['Parcour']['libelle'], array('controller' => 'parcours', 'action' => 'view', $typeRequette['Parcour']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($typeRequette['Produit']['libelle'], array('controller' => 'produits', 'action' => 'view', $typeRequette['Produit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Mage'); ?></dt>
		<dd>
			<?php echo h($typeRequette['TypeRequette']['url_mage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($typeRequette['TypeRequette']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type Requette'), array('action' => 'edit', $typeRequette['TypeRequette']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type Requette'), array('action' => 'delete', $typeRequette['TypeRequette']['id']), array(), __('Are you sure you want to delete # %s?', $typeRequette['TypeRequette']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Requettes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Requette'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parcours'), array('controller' => 'parcours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parcour'), array('controller' => 'parcours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
	</ul>
</div>
