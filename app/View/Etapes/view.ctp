<div class="etapes view">
<h2><?php echo __('Etape'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CODE'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['CODE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Libelle'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['libelle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Niveau'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['niveau']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fg Etat'); ?></dt>
		<dd>
			<?php echo h($etape['Etape']['fg_etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parcour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($etape['Parcour']['libelle'], array('controller' => 'parcours', 'action' => 'view', $etape['Parcour']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($etape['User']['username'], array('controller' => 'users', 'action' => 'view', $etape['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groupe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($etape['Groupe']['nom'], array('controller' => 'groupes', 'action' => 'view', $etape['Groupe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etape'), array('action' => 'edit', $etape['Etape']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Etape'), array('action' => 'delete', $etape['Etape']['id']), array(), __('Are you sure you want to delete # %s?', $etape['Etape']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etape'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parcours'), array('controller' => 'parcours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parcour'), array('controller' => 'parcours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupes'), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe'), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Occurence Requettes'), array('controller' => 'occurence_requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Occurence Requette'), array('controller' => 'occurence_requettes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Occurence Requettes'); ?></h3>
	<?php if (!empty($etape['OccurenceRequette'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Libelle'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Requette Id'); ?></th>
		<th><?php echo __('Etape Id'); ?></th>
		<th><?php echo __('Precedent Id'); ?></th>
		<th><?php echo __('Fg Etat'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($etape['OccurenceRequette'] as $occurenceRequette): ?>
		<tr>
			<td><?php echo $occurenceRequette['id']; ?></td>
			<td><?php echo $occurenceRequette['created']; ?></td>
			<td><?php echo $occurenceRequette['modified']; ?></td>
			<td><?php echo $occurenceRequette['code']; ?></td>
			<td><?php echo $occurenceRequette['libelle']; ?></td>
			<td><?php echo $occurenceRequette['description']; ?></td>
			<td><?php echo $occurenceRequette['requette_id']; ?></td>
			<td><?php echo $occurenceRequette['etape_id']; ?></td>
			<td><?php echo $occurenceRequette['precedent_id']; ?></td>
			<td><?php echo $occurenceRequette['fg_etat']; ?></td>
			<td><?php echo $occurenceRequette['is_active']; ?></td>
			<td><?php echo $occurenceRequette['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'occurence_requettes', 'action' => 'view', $occurenceRequette['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'occurence_requettes', 'action' => 'edit', $occurenceRequette['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'occurence_requettes', 'action' => 'delete', $occurenceRequette['id']), array(), __('Are you sure you want to delete # %s?', $occurenceRequette['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Occurence Requette'), array('controller' => 'occurence_requettes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
