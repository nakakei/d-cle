<div class="shopsShopgenres form">
<?php echo $this->Form->create('ShopsShopgenre'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Shops Shopgenre'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('shop_id');
		echo $this->Form->input('shopgenre_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ShopsShopgenre.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ShopsShopgenre.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shops Shopgenres'), array('action' => 'index')); ?></li>
	</ul>
</div>
