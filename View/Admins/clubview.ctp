<div class="clubs view">
<h2><?php echo __('Club'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($club['Club']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($club['Club']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($club['Club']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clibaction'); ?></dt>
		<dd>
			<?php echo h($club['Club']['clibaction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Career'); ?></dt>
		<dd>
			<?php echo h($club['Club']['career']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($club['Club']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actionday'); ?></dt>
		<dd>
			<?php echo h($club['Club']['actionday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actionlocation'); ?></dt>
		<dd>
			<?php echo h($club['Club']['actionlocation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membership'); ?></dt>
		<dd>
			<?php echo h($club['Club']['membership']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing'); ?></dt>
		<dd>
			<?php echo h($club['Club']['closing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representative'); ?></dt>
		<dd>
			<?php echo h($club['Club']['representative']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($club['Club']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($club['User']['id'], array('controller' => 'users', 'action' => 'view', $club['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($club['Club']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($club['Club']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clubcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($club['Clubcategory']['name'], array('controller' => 'clubcategories', 'action' => 'view', $club['Clubcategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Club'), array('action' => 'edit', $club['Club']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Club'), array('action' => 'delete', $club['Club']['id']), null, __('Are you sure you want to delete # %s?', $club['Club']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($club['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Allday'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>

		<th><?php echo __('Editable'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Club Id'); ?></th>
		<th><?php echo __('Eventcategory Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($club['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['title']; ?></td>
			<td><?php echo $event['body']; ?></td>
			<td><?php echo $event['allday']; ?></td>
			<td><?php echo $event['start']; ?></td>
			<td><?php echo $event['end']; ?></td>
			<td><?php echo $event['editable']; ?></td>
			<td><?php echo $event['url']; ?></td>
			<td><?php echo $event['user_id']; ?></td>
			<td><?php echo $event['club_id']; ?></td>
			<td><?php echo $event['eventcategory_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), null, __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Attachments'); ?></h3>
	<?php if (!empty($club['Attachment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Foreign Key'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Attachment'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($club['Attachment'] as $attachment): ?>
		<tr>
			<td><?php echo $attachment['id']; ?></td>
			<td><?php echo $attachment['model']; ?></td>
			<td><?php echo $attachment['foreign_key']; ?></td>
			<td><?php echo $attachment['photo']; ?></td>
			<td><?php echo $attachment['attachment']; ?></td>
			<td><?php echo $attachment['dir']; ?></td>
			<td><?php echo $attachment['type']; ?></td>
			<td><?php echo $attachment['size']; ?></td>
			<td><?php echo $attachment['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attachments', 'action' => 'view', $attachment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attachments', 'action' => 'edit', $attachment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attachments', 'action' => 'delete', $attachment['id']), null, __('Are you sure you want to delete # %s?', $attachment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
