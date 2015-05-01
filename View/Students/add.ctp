<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('title');
		echo $this->Form->input('info');
		echo $this->Form->input('body');
		echo $this->Form->input('message');
		echo $this->Form->input('other');
		echo $this->Form->input('twitter');
		echo $this->Form->input('facebook');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Studentphotos'), array('controller' => 'studentphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentphoto'), array('controller' => 'studentphotos', 'action' => 'add')); ?> </li>
	</ul>
</div>
