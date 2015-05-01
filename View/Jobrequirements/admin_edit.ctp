<div class="jobrequirements form">
<?php echo $this->Form->create('Jobrequirement'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Jobrequirement'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jobrequirement.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Jobrequirement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobrequirements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
