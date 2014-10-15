<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Profile']['nom'], array('controller' => 'profiles', 'action' => 'view', $user['Profile']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['employee_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapes'), array('controller' => 'etapes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etape'), array('controller' => 'etapes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Occurence Requettes'), array('controller' => 'occurence_requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Occurence Requette'), array('controller' => 'occurence_requettes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requettes'), array('controller' => 'requettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requette'), array('controller' => 'requettes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Etapes'); ?></h3>
	<?php if (!empty($user['Etape'])): ?>
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
	<?php foreach ($user['Etape'] as $etape): ?>
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
<div class="related">
	<h3><?php echo __('Related Occurence Requettes'); ?></h3>
	<?php if (!empty($user['OccurenceRequette'])): ?>
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
	<?php foreach ($user['OccurenceRequette'] as $occurenceRequette): ?>
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
<div class="related">
	<h3><?php echo __('Related Requettes'); ?></h3>
	<?php if (!empty($user['Requette'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Libelle'); ?></th>
		<th><?php echo __('Fg Etat'); ?></th>
		<th><?php echo __('Type Requettes Id'); ?></th>
		<th><?php echo __('Occurence Encours'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Is Complated'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Courrier Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Requette'] as $requette): ?>
		<tr>
			<td><?php echo $requette['id']; ?></td>
			<td><?php echo $requette['created']; ?></td>
			<td><?php echo $requette['modified']; ?></td>
			<td><?php echo $requette['code']; ?></td>
			<td><?php echo $requette['libelle']; ?></td>
			<td><?php echo $requette['fg_etat']; ?></td>
			<td><?php echo $requette['type_requettes_id']; ?></td>
			<td><?php echo $requette['occurence_encours']; ?></td>
			<td><?php echo $requette['description']; ?></td>
			<td><?php echo $requette['client_id']; ?></td>
			<td><?php echo $requette['is_complated']; ?></td>
			<td><?php echo $requette['user_id']; ?></td>
			<td><?php echo $requette['courrier_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'requettes', 'action' => 'view', $requette['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'requettes', 'action' => 'edit', $requette['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requettes', 'action' => 'delete', $requette['id']), array(), __('Are you sure you want to delete # %s?', $requette['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requette'), array('controller' => 'requettes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
