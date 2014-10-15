<div class="produits index">
	<h2><?php echo __('Produits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('libelle'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fg_etat'); ?></th>
			<th><?php echo $this->Paginator->sort('url_image'); ?></th>
			<th><?php echo $this->Paginator->sort('lien_dscription'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produits as $produit): ?>
	<tr>
		<td><?php echo h($produit['Produit']['id']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['created']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['modified']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['numero']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['libelle']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produit['ParentProduit']['libelle'], array('controller' => 'produits', 'action' => 'view', $produit['ParentProduit']['id'])); ?>
		</td>
		<td><?php echo h($produit['Produit']['fg_etat']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['url_image']); ?>&nbsp;</td>
		<td><?php echo h($produit['Produit']['lien_dscription']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $produit['Produit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $produit['Produit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $produit['Produit']['id']), array(), __('Are you sure you want to delete # %s?', $produit['Produit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Produit'), array('action' => 'add')); ?></li>
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
