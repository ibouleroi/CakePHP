<div class="typeRequettes index">
	<h2><?php echo __('Type Requettes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('libelle'); ?></th>
			<th><?php echo $this->Paginator->sort('parcour_id'); ?></th>
			<th><?php echo $this->Paginator->sort('produit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('url_mage'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($typeRequettes as $typeRequette): ?>
	<tr>
		<td><?php echo h($typeRequette['TypeRequette']['id']); ?>&nbsp;</td>
		<td><?php echo h($typeRequette['TypeRequette']['created']); ?>&nbsp;</td>
		<td><?php echo h($typeRequette['TypeRequette']['modified']); ?>&nbsp;</td>
		<td><?php echo h($typeRequette['TypeRequette']['code']); ?>&nbsp;</td>
		<td><?php echo h($typeRequette['TypeRequette']['libelle']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($typeRequette['Parcour']['libelle'], array('controller' => 'parcours', 'action' => 'view', $typeRequette['Parcour']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($typeRequette['Produit']['libelle'], array('controller' => 'produits', 'action' => 'view', $typeRequette['Produit']['id'])); ?>
		</td>
		<td><?php echo h($typeRequette['TypeRequette']['url_mage']); ?>&nbsp;</td>
		<td><?php echo h($typeRequette['TypeRequette']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $typeRequette['TypeRequette']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $typeRequette['TypeRequette']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $typeRequette['TypeRequette']['id']), array(), __('Are you sure you want to delete # %s?', $typeRequette['TypeRequette']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Type Requette'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parcours'), array('controller' => 'parcours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parcour'), array('controller' => 'parcours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
	</ul>
</div>
