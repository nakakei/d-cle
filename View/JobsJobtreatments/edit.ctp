<div class="jobsJobtreatments form">
<?php echo $this->Form->create('JobsJobtreatment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobs Jobtreatment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('job_id');
		echo $this->Form->input('jobtreatment_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobsJobtreatment.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('JobsJobtreatment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs Jobtreatments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtreatments'), array('controller' => 'jobtreatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtreatment'), array('controller' => 'jobtreatments', 'action' => 'add')); ?> </li>
	</ul>
</div>
