<div class="snapphotos form">
<?php echo $this->Form->create('Snapphoto',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Snapphoto'); ?></legend>
	<?php
		echo $this->Form->input('photo',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Snapphotos'), array('action' => 'index')); ?></li>
	</ul>
</div>
