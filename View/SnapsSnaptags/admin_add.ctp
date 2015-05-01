<div class="snapsSnaptags form">
<?php echo $this->Form->create('SnapsSnaptag'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Snaps Snaptag'); ?></legend>
	<?php
		echo $this->Form->input('snap_id');
		echo $this->Form->input('snaptag_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Snaps Snaptags'), array('action' => 'index')); ?></li>
	</ul>
</div>
