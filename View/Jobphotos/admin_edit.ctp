<div class="jobphotos form">
<?php echo $this->Form->create('Jobphoto',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Jobphoto'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->input('foreign_key');
		echo $this->Form->input('photo',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jobphoto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Jobphoto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobphotos'), array('action' => 'index')); ?></li>
	</ul>
</div>
