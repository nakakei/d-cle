<div class="eventtags view">
<h2><?php echo __('Eventtag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventtag['Eventtag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($eventtag['Eventtag']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eventtag'), array('action' => 'edit', $eventtag['Eventtag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eventtag'), array('action' => 'delete', $eventtag['Eventtag']['id']), array(), __('Are you sure you want to delete # %s?', $eventtag['Eventtag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventtags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventtag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($eventtag['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Place'); ?></th>
		<th><?php echo __('Allday'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Editable'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Eventcategory Id'); ?></th>
		<th><?php echo __('Coloer'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($eventtag['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['title']; ?></td>
			<td><?php echo $event['body']; ?></td>
			<td><?php echo $event['place']; ?></td>
			<td><?php echo $event['allday']; ?></td>
			<td><?php echo $event['start']; ?></td>
			<td><?php echo $event['end']; ?></td>
			<td><?php echo $event['editable']; ?></td>
			<td><?php echo $event['url']; ?></td>
			<td><?php echo $event['eventcategory_id']; ?></td>
			<td><?php echo $event['coloer']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), array(), __('Are you sure you want to delete # %s?', $event['id'])); ?>
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
