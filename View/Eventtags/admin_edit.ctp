<div class="eventtags form">
<?php echo $this->Form->create('Eventtag'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Eventtag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Event');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Eventtag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Eventtag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eventtags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
