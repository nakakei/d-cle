<div class="jobsJobplaces index">
	<h2><?php echo __('Jobs Jobplaces'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('jobplace_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobsJobplaces as $jobsJobplace): ?>
	<tr>
		<td><?php echo h($jobsJobplace['JobsJobplace']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobsJobplace['Job']['title'], array('controller' => 'jobs', 'action' => 'view', $jobsJobplace['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobsJobplace['Jobplace']['name'], array('controller' => 'jobplaces', 'action' => 'view', $jobsJobplace['Jobplace']['id'])); ?>
		</td>
		<td><?php echo h($jobsJobplace['JobsJobplace']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobsJobplace['JobsJobplace']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobsJobplace['JobsJobplace']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobsJobplace['JobsJobplace']['id']), array(), __('Are you sure you want to delete # %s?', $jobsJobplace['JobsJobplace']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Jobs Jobplace'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobplaces'), array('controller' => 'jobplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobplace'), array('controller' => 'jobplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
