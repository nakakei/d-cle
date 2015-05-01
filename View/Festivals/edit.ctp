<div class="festivals form">
<?php echo $this->Form->create('Festival'); ?>
	<fieldset>
		<legend><?php echo __('Edit Festival'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Festival.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Festival.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Festivals'), array('action' => 'index')); ?></li>
	</ul>
</div>
