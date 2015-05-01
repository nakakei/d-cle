<div class="foodplaces form">
<?php echo $this->Form->create('Foodplace'); ?>
	<fieldset>
		<legend><?php echo __('Edit Foodplace'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Foodplace.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Foodplace.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Foodplaces'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
