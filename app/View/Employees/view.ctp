<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricule'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['matricule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Office Phone'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['office_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Departement']['nom'], array('controller' => 'departements', 'action' => 'view', $employee['Departement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['cell_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img Url'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['img_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manager Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['manager_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emploi'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Emploi']['id'], array('controller' => 'emplois', 'action' => 'view', $employee['Emploi']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departement Id1'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['departement_id1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mananger Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['mananger_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), array(), __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departements'), array('controller' => 'departements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departement'), array('controller' => 'departements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('controller' => 'emplois', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emploi'), array('controller' => 'emplois', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients'); ?></h3>
	<?php if (!empty($employee['Client'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Adresse'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Nom Tier Payeur'); ?></th>
		<th><?php echo __('Adresse Payeur'); ?></th>
		<th><?php echo __('Telephone Payeur'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Numero Id'); ?></th>
		<th><?php echo __('Logo Url'); ?></th>
		<th><?php echo __('Site Web'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id']; ?></td>
			<td><?php echo $client['created']; ?></td>
			<td><?php echo $client['modified']; ?></td>
			<td><?php echo $client['numero']; ?></td>
			<td><?php echo $client['nom']; ?></td>
			<td><?php echo $client['mail']; ?></td>
			<td><?php echo $client['adresse']; ?></td>
			<td><?php echo $client['telephone']; ?></td>
			<td><?php echo $client['nom_tier_payeur']; ?></td>
			<td><?php echo $client['adresse_payeur']; ?></td>
			<td><?php echo $client['telephone_payeur']; ?></td>
			<td><?php echo $client['employee_id']; ?></td>
			<td><?php echo $client['numero_id']; ?></td>
			<td><?php echo $client['logo_url']; ?></td>
			<td><?php echo $client['site_web']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), array(), __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($employee['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['profile_id']; ?></td>
			<td><?php echo $user['employee_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
