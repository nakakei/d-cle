<div class="shopgenres form">
<?php echo $this->Form->create('Shopgenre'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Shopgenre'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Shop');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shopgenres'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
	</ul>
</div>
