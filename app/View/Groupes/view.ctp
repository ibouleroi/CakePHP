<div class="groupes view">
<h2><?php echo __('Groupe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($groupe['Groupe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($groupe['Groupe']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($groupe['Groupe']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($groupe['Groupe']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($groupe['Groupe']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($groupe['Groupe']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nb Users'); ?></dt>
		<dd>
			<?php echo h($groupe['Groupe']['nb_users']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Groupe'), array('action' => 'edit', $groupe['Groupe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Groupe'), array('action' => 'delete', $groupe['Groupe']['id']), array(), __('Are you sure you want to delete # %s?', $groupe['Groupe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapes'), array('controller' => 'etapes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etape'), array('controller' => 'etapes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Etapes'); ?></h3>
	<?php if (!empty($groupe['Etape'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('CODE'); ?></th>
		<th><?php echo __('Libelle'); ?></th>
		<th><?php echo __('Niveau'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Fg Etat'); ?></th>
		<th><?php echo __('Parcour Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Groupe Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($groupe['Etape'] as $etape): ?>
		<tr>
			<td><?php echo $etape['id']; ?></td>
			<td><?php echo $etape['created']; ?></td>
			<td><?php echo $etape['modified']; ?></td>
			<td><?php echo $etape['CODE']; ?></td>
			<td><?php echo $etape['libelle']; ?></td>
			<td><?php echo $etape['niveau']; ?></td>
			<td><?php echo $etape['description']; ?></td>
			<td><?php echo $etape['type']; ?></td>
			<td><?php echo $etape['fg_etat']; ?></td>
			<td><?php echo $etape['parcour_id']; ?></td>
			<td><?php echo $etape['user_id']; ?></td>
			<td><?php echo $etape['groupe_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'etapes', 'action' => 'view', $etape['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'etapes', 'action' => 'edit', $etape['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'etapes', 'action' => 'delete', $etape['id']), array(), __('Are you sure you want to delete # %s?', $etape['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Etape'), array('controller' => 'etapes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
