<div class="jobsJobtreatments index">
	<h2><?php echo __('Jobs Jobtreatments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('jobtreatment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobsJobtreatments as $jobsJobtreatment): ?>
	<tr>
		<td><?php echo h($jobsJobtreatment['JobsJobtreatment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobsJobtreatment['Job']['title'], array('controller' => 'jobs', 'action' => 'view', $jobsJobtreatment['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobsJobtreatment['Jobtreatment']['name'], array('controller' => 'jobtreatments', 'action' => 'view', $jobsJobtreatment['Jobtreatment']['id'])); ?>
		</td>
		<td><?php echo h($jobsJobtreatment['JobsJobtreatment']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobsJobtreatment['JobsJobtreatment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobsJobtreatment['JobsJobtreatment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobsJobtreatment['JobsJobtreatment']['id']), array(), __('Are you sure you want to delete # %s?', $jobsJobtreatment['JobsJobtreatment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Jobs Jobtreatment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtreatments'), array('controller' => 'jobtreatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtreatment'), array('controller' => 'jobtreatments', 'action' => 'add')); ?> </li>
	</ul>
</div>
