<div class="students index">
	<h2><?php echo __('Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('university'); ?></th>
			<th><?php echo $this->Paginator->sort('undergraduate'); ?></th>
			<th><?php echo $this->Paginator->sort('schoolyear'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('other'); ?></th>
			<th><?php echo $this->Paginator->sort('twitter'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($students as $student): ?>
	<tr>
		<td><?php echo h($student['Student']['id']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['title']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['university']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['undergraduate']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['schoolyear']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['body']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['message']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['other']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['twitter']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['facebook']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['created']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), array(), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Studentphotos'), array('controller' => 'studentphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentphoto'), array('controller' => 'studentphotos', 'action' => 'add')); ?> </li>
	</ul>
</div>
