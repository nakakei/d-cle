<div class="shopphotos form">
<?php echo $this->Form->create('Shopphoto'); ?>
	<fieldset>
		<legend><?php echo __('Add Shopphoto'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Shopphotos'), array('action' => 'index')); ?></li>
	</ul>
</div>
