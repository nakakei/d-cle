<div class="eventcategories form">
<?php echo $this->Form->create('Eventcategory'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Eventcategory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Eventcategory.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Eventcategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eventcategories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
