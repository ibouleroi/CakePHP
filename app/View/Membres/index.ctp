<div class="membres index">
	<h2><?php echo __('Membres'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('groupe_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membres as $membre): ?>
	<tr>
		<td><?php echo h($membre['Membre']['id']); ?>&nbsp;</td>
		<td><?php echo h($membre['Membre']['created']); ?>&nbsp;</td>
		<td><?php echo h($membre['Membre']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($membre['Groupe']['nom'], array('controller' => 'groupes', 'action' => 'view', $membre['Groupe']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($membre['User']['username'], array('controller' => 'users', 'action' => 'view', $membre['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $membre['Membre']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $membre['Membre']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $membre['Membre']['id']), array(), __('Are you sure you want to delete # %s?', $membre['Membre']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Membre'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groupes'), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe'), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
