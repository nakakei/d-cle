<div class="jobplaces form">
<?php echo $this->Form->create('Jobplace'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Jobplace'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Job');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobplaces'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
