<div class="events index">
	<h2><?php echo __('Events'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('place'); ?></th>
			<th><?php echo $this->Paginator->sort('allday'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('editable'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('club_id'); ?></th>
			<th><?php echo $this->Paginator->sort('eventcategory_id'); ?></th>
			<th><?php echo $this->Paginator->sort('coloer'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['title']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['body']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['place']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['allday']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['start']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['end']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['editable']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['url']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['User']['id'], array('controller' => 'users', 'action' => 'view', $event['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Club']['name'], array('controller' => 'clubs', 'action' => 'view', $event['Club']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Eventcategory']['name'], array('controller' => 'eventcategories', 'action' => 'view', $event['Eventcategory']['id'])); ?>
		</td>
		<td><?php echo h($event['Event']['coloer']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), array(), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventcategories'), array('controller' => 'eventcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventcategory'), array('controller' => 'eventcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
