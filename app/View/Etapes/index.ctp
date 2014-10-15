<div class="etapes index">
	<h2><?php echo __('Etapes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('CODE'); ?></th>
			<th><?php echo $this->Paginator->sort('libelle'); ?></th>
			<th><?php echo $this->Paginator->sort('niveau'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('fg_etat'); ?></th>
			<th><?php echo $this->Paginator->sort('parcour_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('groupe_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($etapes as $etape): ?>
	<tr>
		<td><?php echo h($etape['Etape']['id']); ?>&nbsp;</td>
		<td><?php echo h($etape['Etape']['created']); ?>&nbsp;</td>
		<td><?php echo h($etape['Etape']['modified']); ?>&nbsp;</td>
		<td><?php echo h($etape['Etape']['CODE']); ?>&nbsp;</td>
		<td><?php echo h($etape['Etape']['libelle']); ?>&nbsp;</td>
		<td><?php echo h($etape['Etape']['niveau']); ?>&nbsp;</td>
		<td><?php echo h($etape['Etape']['description']); ?>&nbsp;</td>
		<td><?php echo h($etape['Etape']['type']); ?>&nbsp;</td>
		<td><?php echo h($etape['Etape']['fg_etat']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($etape['Parcour']['libelle'], array('controller' => 'parcours', 'action' => 'view', $etape['Parcour']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($etape['User']['username'], array('controller' => 'users', 'action' => 'view', $etape['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($etape['Groupe']['nom'], array('controller' => 'groupes', 'action' => 'view', $etape['Groupe']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $etape['Etape']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $etape['Etape']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $etape['Etape']['id']), array(), __('Are you sure you want to delete # %s?', $etape['Etape']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Etape'), array('action' => 'add')); ?></li>
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
