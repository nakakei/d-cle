<div class="shopsShopplaces form">
<?php echo $this->Form->create('ShopsShopplace'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shops Shopplace'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('shop_id');
		echo $this->Form->input('shopplace_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ShopsShopplace.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ShopsShopplace.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shops Shopplaces'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopplaces'), array('controller' => 'shopplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopplace'), array('controller' => 'shopplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
