<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('title');
		echo $this->Form->input('university');
		echo $this->Form->input('undergraduate');
		echo $this->Form->input('schoolyear');
		echo $this->Form->input('body',array('class'=>'ckeditor'));
		echo $this->Form->input('message',array('class'=>'ckeditor'));
		echo $this->Form->input('other',array('class'=>'ckeditor'));
		echo $this->Form->input('twitter');
		echo $this->Form->input('facebook');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Student.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Student.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Studentphotos'), array('controller' => 'studentphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentphoto'), array('controller' => 'studentphotos', 'action' => 'add')); ?> </li>
	</ul>
</div>
