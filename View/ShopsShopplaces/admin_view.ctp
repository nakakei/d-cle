<div class="shopsShopplaces view">
<h2><?php echo __('Shops Shopplace'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shopsShopplace['ShopsShopplace']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shopsShopplace['Shop']['title'], array('controller' => 'shops', 'action' => 'view', $shopsShopplace['Shop']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shopplace'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shopsShopplace['Shopplace']['name'], array('controller' => 'shopplaces', 'action' => 'view', $shopsShopplace['Shopplace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($shopsShopplace['ShopsShopplace']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shops Shopplace'), array('action' => 'edit', $shopsShopplace['ShopsShopplace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shops Shopplace'), array('action' => 'delete', $shopsShopplace['ShopsShopplace']['id']), array(), __('Are you sure you want to delete # %s?', $shopsShopplace['ShopsShopplace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops Shopplaces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shops Shopplace'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopplaces'), array('controller' => 'shopplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopplace'), array('controller' => 'shopplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
