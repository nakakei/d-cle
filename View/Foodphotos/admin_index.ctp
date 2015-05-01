<div class="foodphotos index">
	<h2><?php echo __('Foodphotos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('foreign_key'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($foodphotos as $foodphoto): ?>
	<tr>
		<td><?php echo h($foodphoto['Foodphoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($foodphoto['Foodphoto']['model']); ?>&nbsp;</td>
		<td><?php echo h($foodphoto['Foodphoto']['foreign_key']); ?>&nbsp;</td>
		<td><?php echo h($foodphoto['Foodphoto']['photo']); ?>&nbsp;</td>
		<td><?php echo h($foodphoto['Foodphoto']['dir']); ?>&nbsp;</td>
		<td><?php echo h($foodphoto['Foodphoto']['type']); ?>&nbsp;</td>
		<td><?php echo h($foodphoto['Foodphoto']['size']); ?>&nbsp;</td>
		<td><?php echo h($foodphoto['Foodphoto']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $foodphoto['Foodphoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $foodphoto['Foodphoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $foodphoto['Foodphoto']['id']), array(), __('Are you sure you want to delete # %s?', $foodphoto['Foodphoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Foodphoto'), array('action' => 'add')); ?></li>
	</ul>
</div>
