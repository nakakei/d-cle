<div class="jobphotos index">
	<h2><?php echo __('Jobphotos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('foreign_key'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobphotos as $jobphoto): ?>
	<tr>
		<td><?php echo h($jobphoto['Jobphoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($jobphoto['Jobphoto']['model']); ?>&nbsp;</td>
		<td><?php echo h($jobphoto['Jobphoto']['foreign_key']); ?>&nbsp;</td>
		<td><?php echo h($jobphoto['Jobphoto']['photo']); ?>&nbsp;</td>
		<td><?php echo h($jobphoto['Jobphoto']['dir']); ?>&nbsp;</td>
		<td><?php echo h($jobphoto['Jobphoto']['type']); ?>&nbsp;</td>
		<td><?php echo h($jobphoto['Jobphoto']['size']); ?>&nbsp;</td>
		<td><?php echo h($jobphoto['Jobphoto']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobphoto['Jobphoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobphoto['Jobphoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobphoto['Jobphoto']['id']), array(), __('Are you sure you want to delete # %s?', $jobphoto['Jobphoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Jobphoto'), array('action' => 'add')); ?></li>
	</ul>
</div>
