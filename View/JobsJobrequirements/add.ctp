<div class="jobsJobrequirements form">
<?php echo $this->Form->create('JobsJobrequirement'); ?>
	<fieldset>
		<legend><?php echo __('Add Jobs Jobrequirement'); ?></legend>
	<?php
		echo $this->Form->input('job_id');
		echo $this->Form->input('jobrequirement_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs Jobrequirements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobrequirements'), array('controller' => 'jobrequirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobrequirement'), array('controller' => 'jobrequirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
