<div class="snapsSnaptags form">
<?php echo $this->Form->create('SnapsSnaptag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Snaps Snaptag'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SnapsSnaptag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SnapsSnaptag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Snaps Snaptags'), array('action' => 'index')); ?></li>
	</ul>
</div>
