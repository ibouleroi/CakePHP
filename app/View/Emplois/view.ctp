<div class="departements view">
<h2><?php echo __('Departement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departement['Departement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($departement['Departement']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($departement['Departement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($departement['Departement']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($departement['Departement']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($departement['Departement']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($departement['Departement']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fg Etat'); ?></dt>
		<dd>
			<?php echo h($departement['Departement']['fg_etat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Departement'), array('action' => 'edit', $departement['Departement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Departement'), array('action' => 'delete', $departement['Departement']['id']), array(), __('Are you sure you want to delete # %s?', $departement['Departement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($departement['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Matricule'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Prenom'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Office Phone'); ?></th>
		<th><?php echo __('Departement Id'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Img Url'); ?></th>
		<th><?php echo __('Manager Id'); ?></th>
		<th><?php echo __('Emploi Id'); ?></th>
		<th><?php echo __('Departement Id1'); ?></th>
		<th><?php echo __('Mananger Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($departement['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td><?php echo $employee['matricule']; ?></td>
			<td><?php echo $employee['nom']; ?></td>
			<td><?php echo $employee['prenom']; ?></td>
			<td><?php echo $employee['mail']; ?></td>
			<td><?php echo $employee['office_phone']; ?></td>
			<td><?php echo $employee['departement_id']; ?></td>
			<td><?php echo $employee['cell_phone']; ?></td>
			<td><?php echo $employee['img_url']; ?></td>
			<td><?php echo $employee['manager_id']; ?></td>
			<td><?php echo $employee['emploi_id']; ?></td>
			<td><?php echo $employee['departement_id1']; ?></td>
			<td><?php echo $employee['mananger_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), array(), __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
