<div class="foodtags form">
<?php echo $this->Form->create('Foodtag'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Foodtag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Food');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Foodtag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Foodtag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Foodtags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
