<div class="jobsJobplaces view">
<h2><?php echo __('Jobs Jobplace'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobsJobplace['JobsJobplace']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsJobplace['Job']['title'], array('controller' => 'jobs', 'action' => 'view', $jobsJobplace['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobplace'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsJobplace['Jobplace']['name'], array('controller' => 'jobplaces', 'action' => 'view', $jobsJobplace['Jobplace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($jobsJobplace['JobsJobplace']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobs Jobplace'), array('action' => 'edit', $jobsJobplace['JobsJobplace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobs Jobplace'), array('action' => 'delete', $jobsJobplace['JobsJobplace']['id']), array(), __('Are you sure you want to delete # %s?', $jobsJobplace['JobsJobplace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs Jobplaces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobs Jobplace'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobplaces'), array('controller' => 'jobplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobplace'), array('controller' => 'jobplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
