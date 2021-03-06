<div class="shopsShopplaces index">
	<h2><?php echo __('Shops Shopplaces'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_id'); ?></th>
			<th><?php echo $this->Paginator->sort('shopplace_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shopsShopplaces as $shopsShopplace): ?>
	<tr>
		<td><?php echo h($shopsShopplace['ShopsShopplace']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($shopsShopplace['Shop']['title'], array('controller' => 'shops', 'action' => 'view', $shopsShopplace['Shop']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($shopsShopplace['Shopplace']['name'], array('controller' => 'shopplaces', 'action' => 'view', $shopsShopplace['Shopplace']['id'])); ?>
		</td>
		<td><?php echo h($shopsShopplace['ShopsShopplace']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shopsShopplace['ShopsShopplace']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shopsShopplace['ShopsShopplace']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shopsShopplace['ShopsShopplace']['id']), array(), __('Are you sure you want to delete # %s?', $shopsShopplace['ShopsShopplace']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Shops Shopplace'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopplaces'), array('controller' => 'shopplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopplace'), array('controller' => 'shopplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
