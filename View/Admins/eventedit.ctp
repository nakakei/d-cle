<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('place');
		echo $this->Form->input('allday');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('editable');
		echo $this->Form->input('url');
		echo $this->Form->input('user_id');
		echo $this->Form->input('club_id');
		echo $this->Form->input('eventcategory_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Event.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventcategories'), array('controller' => 'eventcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventcategory'), array('controller' => 'eventcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
