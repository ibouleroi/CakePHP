<div class="produits view">
<h2><?php echo __('Produit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Libelle'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['libelle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Produit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produit['ParentProduit']['libelle'], array('controller' => 'produits', 'action' => 'view', $produit['ParentProduit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fg Etat'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['fg_etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['url_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lien Dscription'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['lien_dscription']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produit'), array('action' => 'edit', $produit['Produit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produit'), array('action' => 'delete', $produit['Produit']['id']), array(), __('Are you sure you want to delete # %s?', $produit['Produit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Dette Snapshots'); ?></h3>
	<?php if (!empty($produit['DetteSnapshot'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Montant Du'); ?></th>
		<th><?php echo __('Nb Mois'); ?></th>
		<th><?php echo __('Fg Etat'); ?></th>
		<th><?php echo __('Occurence Requette Id'); ?></th>
		<th><?php echo __('Produit Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produit['DetteSnapshot'] as $detteSnapshot): ?>
		<tr>
			<td><?php echo $detteSnapshot['id']; ?></td>
			<td><?php echo $detteSnapshot['created']; ?></td>
			<td><?php echo $detteSnapshot['modified']; ?></td>
			<td><?php echo $detteSnapshot['montant_du']; ?></td>
			<td><?php echo $detteSnapshot['nb_mois']; ?></td>
			<td><?php echo $detteSnapshot['fg_etat']; ?></td>
			<td><?php echo $detteSnapshot['occurence_requette_id']; ?></td>
			<td><?php echo $detteSnapshot['produit_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dette_snapshots', 'action' => 'view', $detteSnapshot['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dette_snapshots', 'action' => 'edit', $detteSnapshot['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dette_snapshots', 'action' => 'delete', $detteSnapshot['id']), array(), __('Are you sure you want to delete # %s?', $detteSnapshot['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dette Snapshot'), array('controller' => 'dette_snapshots', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dettes'); ?></h3>
	<?php if (!empty($produit['Dette'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Montant Du'); ?></th>
		<th><?php echo __('Nb Mois'); ?></th>
		<th><?php echo __('Fg Etat'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Produit Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produit['Dette'] as $dette): ?>
		<tr>
			<td><?php echo $dette['id']; ?></td>
			<td><?php echo $dette['created']; ?></td>
			<td><?php echo $dette['modified']; ?></td>
			<td><?php echo $dette['montant_du']; ?></td>
			<td><?php echo $dette['nb_mois']; ?></td>
			<td><?php echo $dette['fg_etat']; ?></td>
			<td><?php echo $dette['client_id']; ?></td>
			<td><?php echo $dette['produit_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dettes', 'action' => 'view', $dette['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dettes', 'action' => 'edit', $dette['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dettes', 'action' => 'delete', $dette['id']), array(), __('Are you sure you want to delete # %s?', $dette['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dette'), array('controller' => 'dettes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Produits'); ?></h3>
	<?php if (!empty($produit['ChildProduit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Libelle'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Fg Etat'); ?></th>
		<th><?php echo __('Url Image'); ?></th>
		<th><?php echo __('Lien Dscription'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produit['ChildProduit'] as $childProduit): ?>
		<tr>
			<td><?php echo $childProduit['id']; ?></td>
			<td><?php echo $childProduit['created']; ?></td>
			<td><?php echo $childProduit['modified']; ?></td>
			<td><?php echo $childProduit['numero']; ?></td>
			<td><?php echo $childProduit['libelle']; ?></td>
			<td><?php echo $childProduit['description']; ?></td>
			<td><?php echo $childProduit['parent_id']; ?></td>
			<td><?php echo $childProduit['fg_etat']; ?></td>
			<td><?php echo $childProduit['url_image']; ?></td>
			<td><?php echo $childProduit['lien_dscription']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produits', 'action' => 'view', $childProduit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produits', 'action' => 'edit', $childProduit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produits', 'action' => 'delete', $childProduit['id']), array(), __('Are you sure you want to delete # %s?', $childProduit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Requisitions'); ?></h3>
	<?php if (!empty($produit['Requisition'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Produit Id'); ?></th>
		<th><?php echo __('Produit Requis Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produit['Requisition'] as $requisition): ?>
		<tr>
			<td><?php echo $requisition['id']; ?></td>
			<td><?php echo $requisition['created']; ?></td>
			<td><?php echo $requisition['modified']; ?></td>
			<td><?php echo $requisition['produit_id']; ?></td>
			<td><?php echo $requisition['produit_requis_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'requisitions', 'action' => 'view', $requisition['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'requisitions', 'action' => 'edit', $requisition['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requisitions', 'action' => 'delete', $requisition['id']), array(), __('Are you sure you want to delete # %s?', $requisition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requisition'), array('controller' => 'requisitions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Souscriptions'); ?></h3>
	<?php if (!empty($produit['Souscription'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Fg Etat'); ?></th>
		<th><?php echo __('Numero Id'); ?></th>
		<th><?php echo __('Produit Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produit['Souscription'] as $souscription): ?>
		<tr>
			<td><?php echo $souscription['id']; ?></td>
			<td><?php echo $souscription['created']; ?></td>
			<td><?php echo $souscription['modified']; ?></td>
			<td><?php echo $souscription['fg_etat']; ?></td>
			<td><?php echo $souscription['numero_id']; ?></td>
			<td><?php echo $souscription['produit_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'souscriptions', 'action' => 'view', $souscription['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'souscriptions', 'action' => 'edit', $souscription['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'souscriptions', 'action' => 'delete', $souscription['id']), array(), __('Are you sure you want to delete # %s?', $souscription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Souscription'), array('controller' => 'souscriptions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Type Requettes'); ?></h3>
	<?php if (!empty($produit['TypeRequette'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Libelle'); ?></th>
		<th><?php echo __('Parcour Id'); ?></th>
		<th><?php echo __('Produit Id'); ?></th>
		<th><?php echo __('Url Mage'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produit['TypeRequette'] as $typeRequette): ?>
		<tr>
			<td><?php echo $typeRequette['id']; ?></td>
			<td><?php echo $typeRequette['created']; ?></td>
			<td><?php echo $typeRequette['modified']; ?></td>
			<td><?php echo $typeRequette['code']; ?></td>
			<td><?php echo $typeRequette['libelle']; ?></td>
			<td><?php echo $typeRequette['parcour_id']; ?></td>
			<td><?php echo $typeRequette['produit_id']; ?></td>
			<td><?php echo $typeRequette['url_mage']; ?></td>
			<td><?php echo $typeRequette['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'type_requettes', 'action' => 'view', $typeRequette['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'type_requettes', 'action' => 'edit', $typeRequette['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'type_requettes', 'action' => 'delete', $typeRequette['id']), array(), __('Are you sure you want to delete # %s?', $typeRequette['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Type Requette'), array('controller' => 'type_requettes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
