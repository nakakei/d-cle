<div class="clubs index">
	<h2><?php echo __('Clubs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('clibaction'); ?></th>
			<th><?php echo $this->Paginator->sort('career'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th><?php echo $this->Paginator->sort('actionday'); ?></th>
			<th><?php echo $this->Paginator->sort('actionlocation'); ?></th>
			<th><?php echo $this->Paginator->sort('membership'); ?></th>
			<th><?php echo $this->Paginator->sort('closing'); ?></th>
			<th><?php echo $this->Paginator->sort('representative'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('clubcategory_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clubs as $club): ?>
	<tr>
		<td><?php echo h($club['Club']['id']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['name']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['body']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['clibaction']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['career']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['number']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['actionday']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['actionlocation']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['membership']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['closing']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['representative']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($club['User']['id'], array('controller' => 'users', 'action' => 'view', $club['User']['id'])); ?>
		</td>
		<td><?php echo h($club['Club']['created']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($club['Clubcategory']['name'], array('controller' => 'clubcategories', 'action' => 'view', $club['Clubcategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $club['Club']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $club['Club']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $club['Club']['id']), null, __('Are you sure you want to delete # %s?', $club['Club']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Club'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubcategories'), array('controller' => 'clubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clubcategory'), array('controller' => 'clubcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachments'), array('controller' => 'attachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
	</ul>
</div>
