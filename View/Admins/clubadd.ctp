<div class="clubs form">
<?php echo $this->Form->create('Club'); ?>
	<fieldset>
		<legend><?php echo __('Add Club'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('body');
		echo $this->Form->input('clibaction');
		echo $this->Form->input('career');
		echo $this->Form->input('number');
		echo $this->Form->input('actionday');
		echo $this->Form->input('actionlocation');
		echo $this->Form->input('membership');
		echo $this->Form->input('closing');
		echo $this->Form->input('representative');
		echo $this->Form->input('email');
		echo $this->Form->input('user_id');
		echo $this->Form->input('clubcategory_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clubs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubcategories'), array('controller' => 'clubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clubcategory'), array('controller' => 'clubcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachments'), array('controller' => 'attachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
	</ul>
</div>
