<div class="memberphotos form">
<?php echo $this->Form->create('Memberphoto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Memberphoto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('model');
		echo $this->Form->input('foreign_key');
		echo $this->Form->input('photo');
		echo $this->Form->input('dir');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Memberphoto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Memberphoto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Memberphotos'), array('action' => 'index')); ?></li>
	</ul>
</div>
