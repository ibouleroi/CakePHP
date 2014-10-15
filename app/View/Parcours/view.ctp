<div class="parcours view">
<h2><?php echo __('Parcour'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($parcour['Parcour']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($parcour['Parcour']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($parcour['Parcour']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($parcour['Parcour']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Libelle'); ?></dt>
		<dd>
			<?php echo h($parcour['Parcour']['libelle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($parcour['Parcour']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fg Etat'); ?></dt>
		<dd>
			<?php echo h($parcour['Parcour']['fg_etat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parcour'), array('action' => 'edit', $parcour['Parcour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parcour'), array('action' => 'delete', $parcour['Parcour']['id']), array(), __('Are you sure you want to delete # %s?', $parcour['Parcour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parcours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parcour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Requettes'), array('controller' => 'type_requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Requette'), array('controller' => 'type_requettes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Type Requettes'); ?></h3>
	<?php if (!empty($parcour['type_requette'])): ?>
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
	<?php foreach ($parcour['type_requette'] as $typeRequette): ?>
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
