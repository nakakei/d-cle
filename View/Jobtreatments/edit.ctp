<div class="jobtreatments form">
<?php echo $this->Form->create('Jobtreatment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobtreatment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Job');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jobtreatment.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Jobtreatment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobtreatments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
