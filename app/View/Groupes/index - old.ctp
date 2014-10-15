<div class="groupes index">
	<h2><?php echo __('Groupes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('nb_users'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($groupes as $groupe): ?>
	<tr>
		<td><?php echo h($groupe['Groupe']['id']); ?>&nbsp;</td>
		<td><?php echo h($groupe['Groupe']['created']); ?>&nbsp;</td>
		<td><?php echo h($groupe['Groupe']['modified']); ?>&nbsp;</td>
		<td><?php echo h($groupe['Groupe']['code']); ?>&nbsp;</td>
		<td><?php echo h($groupe['Groupe']['nom']); ?>&nbsp;</td>
		<td><?php echo h($groupe['Groupe']['description']); ?>&nbsp;</td>
		<td><?php echo h($groupe['Groupe']['nb_users']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $groupe['Groupe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $groupe['Groupe']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $groupe['Groupe']['id']), array(), __('Are you sure you want to delete # %s?', $groupe['Groupe']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Groupe'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Etapes'), array('controller' => 'etapes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etape'), array('controller' => 'etapes', 'action' => 'add')); ?> </li>
	</ul>
</div>
