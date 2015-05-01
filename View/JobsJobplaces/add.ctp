<div class="jobsJobplaces form">
<?php echo $this->Form->create('JobsJobplace'); ?>
	<fieldset>
		<legend><?php echo __('Add Jobs Jobplace'); ?></legend>
	<?php
		echo $this->Form->input('job_id');
		echo $this->Form->input('jobplace_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs Jobplaces'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobplaces'), array('controller' => 'jobplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobplace'), array('controller' => 'jobplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
