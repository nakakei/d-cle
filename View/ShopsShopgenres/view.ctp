<div class="shopsShopgenres view">
<h2><?php echo __('Shops Shopgenre'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shopsShopgenre['ShopsShopgenre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Id'); ?></dt>
		<dd>
			<?php echo h($shopsShopgenre['ShopsShopgenre']['shop_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shopgenre Id'); ?></dt>
		<dd>
			<?php echo h($shopsShopgenre['ShopsShopgenre']['shopgenre_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($shopsShopgenre['ShopsShopgenre']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shops Shopgenre'), array('action' => 'edit', $shopsShopgenre['ShopsShopgenre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shops Shopgenre'), array('action' => 'delete', $shopsShopgenre['ShopsShopgenre']['id']), array(), __('Are you sure you want to delete # %s?', $shopsShopgenre['ShopsShopgenre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops Shopgenres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shops Shopgenre'), array('action' => 'add')); ?> </li>
	</ul>
</div>
