<div class="membres view">
<h2><?php echo __('Membre'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($membre['Membre']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groupe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membre['Groupe']['nom'], array('controller' => 'groupes', 'action' => 'view', $membre['Groupe']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membre['User']['username'], array('controller' => 'users', 'action' => 'view', $membre['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membre'), array('action' => 'edit', $membre['Membre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membre'), array('action' => 'delete', $membre['Membre']['id']), array(), __('Are you sure you want to delete # %s?', $membre['Membre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Membres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupes'), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe'), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
