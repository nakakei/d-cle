<div class="shops index">
	<h2><?php echo __('Shops'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('money'); ?></th>
			<th><?php echo $this->Paginator->sort('seat'); ?></th>
			<th><?php echo $this->Paginator->sort('parking'); ?></th>
			<th><?php echo $this->Paginator->sort('smoke'); ?></th>
			<th><?php echo $this->Paginator->sort('time'); ?></th>
			<th><?php echo $this->Paginator->sort('holiday'); ?></th>
			<th><?php echo $this->Paginator->sort('word'); ?></th>
			<th><?php echo $this->Paginator->sort('mail'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('acces'); ?></th>
			<th><?php echo $this->Paginator->sort('map'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shops as $shop): ?>
	<tr>
		<td><?php echo h($shop['Shop']['id']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['title']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['active']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['body']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['money']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['seat']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['parking']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['smoke']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['time']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['holiday']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['word']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['mail']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['tel']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['acces']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['map']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['created']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shop['Shop']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shop['Shop']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shop['Shop']['id']), array(), __('Are you sure you want to delete # %s?', $shop['Shop']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Shop'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Shopphotos'), array('controller' => 'shopphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shophoto'), array('controller' => 'shopphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopgenres'), array('controller' => 'shopgenres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopgenre'), array('controller' => 'shopgenres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopplaces'), array('controller' => 'shopplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopplace'), array('controller' => 'shopplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
