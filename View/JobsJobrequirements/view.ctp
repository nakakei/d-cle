<div class="jobsJobrequirements view">
<h2><?php echo __('Jobs Jobrequirement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobsJobrequirement['JobsJobrequirement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsJobrequirement['Job']['title'], array('controller' => 'jobs', 'action' => 'view', $jobsJobrequirement['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobrequirement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsJobrequirement['Jobrequirement']['name'], array('controller' => 'jobrequirements', 'action' => 'view', $jobsJobrequirement['Jobrequirement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($jobsJobrequirement['JobsJobrequirement']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobs Jobrequirement'), array('action' => 'edit', $jobsJobrequirement['JobsJobrequirement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobs Jobrequirement'), array('action' => 'delete', $jobsJobrequirement['JobsJobrequirement']['id']), array(), __('Are you sure you want to delete # %s?', $jobsJobrequirement['JobsJobrequirement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs Jobrequirements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobs Jobrequirement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobrequirements'), array('controller' => 'jobrequirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobrequirement'), array('controller' => 'jobrequirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
