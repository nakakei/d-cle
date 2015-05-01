<div class="festivals form">
<?php echo $this->Form->create('Festival'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Festival'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('place');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Festivals'), array('action' => 'index')); ?></li>
	</ul>
</div>
