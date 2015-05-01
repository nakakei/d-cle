<div class="snaptags form">
<?php echo $this->Form->create('Snaptag'); ?>
	<fieldset>
		<legend><?php echo __('Add Snaptag'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Snap');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Snaptags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Snaps'), array('controller' => 'snaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snap'), array('controller' => 'snaps', 'action' => 'add')); ?> </li>
	</ul>
</div>
