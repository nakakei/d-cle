<div class="foods form">
<?php echo $this->Form->create('Food'); ?>
	<fieldset>
		<legend><?php echo __('Edit Food'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('foodplace_id');
		echo $this->Form->input('active');
		echo $this->Form->input('Foodtag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Food.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Food.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Foods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Foodplaces'), array('controller' => 'foodplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodplace'), array('controller' => 'foodplaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodphotos'), array('controller' => 'foodphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodphoto'), array('controller' => 'foodphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodtags'), array('controller' => 'foodtags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodtag'), array('controller' => 'foodtags', 'action' => 'add')); ?> </li>
	</ul>
</div>
