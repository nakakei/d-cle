<div class="eventsEventtags form">
<?php echo $this->Form->create('EventsEventtag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Events Eventtag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('eventtag_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventsEventtag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EventsEventtag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events Eventtags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventtags'), array('controller' => 'eventtags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventtag'), array('controller' => 'eventtags', 'action' => 'add')); ?> </li>
	</ul>
</div>
