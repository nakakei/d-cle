<div class="snaps form">
<?php echo $this->Form->create('Snap'); ?>
	<fieldset>
		<legend><?php echo __('Edit Snap'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('university');
		echo $this->Form->input('undergraduate');
		echo $this->Form->input('schoolyear');
		echo $this->Form->input('love');
		echo $this->Form->input('questionfree');
		echo $this->Form->input('questionanswer');
		echo $this->Form->input('other');
		echo $this->Form->input('Snaptag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Snap.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Snap.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Snaps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Snapphotos'), array('controller' => 'snapphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snapphoto'), array('controller' => 'snapphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Snaptags'), array('controller' => 'snaptags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snaptag'), array('controller' => 'snaptags', 'action' => 'add')); ?> </li>
	</ul>
</div>
