<div class="shops form">
<?php echo $this->Form->create('Shop'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shop'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('active');
		echo $this->Form->input('body');
		echo $this->Form->input('money');
		echo $this->Form->input('seat');
		echo $this->Form->input('parking');
		echo $this->Form->input('smoke');
		echo $this->Form->input('time');
		echo $this->Form->input('holiday');
		echo $this->Form->input('word');
		echo $this->Form->input('mail');
		echo $this->Form->input('tel');
		echo $this->Form->input('acces');
		echo $this->Form->input('map');
		echo $this->Form->input('Shopgenre');
		echo $this->Form->input('Shopplace');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Shop.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Shop.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shops'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shopphotos'), array('controller' => 'shopphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shophoto'), array('controller' => 'shopphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopgenres'), array('controller' => 'shopgenres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopgenre'), array('controller' => 'shopgenres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopplaces'), array('controller' => 'shopplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopplace'), array('controller' => 'shopplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
