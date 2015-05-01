<div class="snapphotos index">
	<h2><?php echo __('Snapphotos'); ?></h2>
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
	<?php foreach ($snapphotos as $snapphoto): ?>
	<tr>
		<td><?php echo h($snapphoto['Snapphoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($snapphoto['Snapphoto']['model']); ?>&nbsp;</td>
		<td><?php echo h($snapphoto['Snapphoto']['foreign_key']); ?>&nbsp;</td>
		<td><?php echo h($snapphoto['Snapphoto']['photo']); ?>&nbsp;</td>
		<td><?php echo h($snapphoto['Snapphoto']['dir']); ?>&nbsp;</td>
		<td><?php echo h($snapphoto['Snapphoto']['type']); ?>&nbsp;</td>
		<td><?php echo h($snapphoto['Snapphoto']['size']); ?>&nbsp;</td>
		<td><?php echo h($snapphoto['Snapphoto']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $snapphoto['Snapphoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $snapphoto['Snapphoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $snapphoto['Snapphoto']['id']), array(), __('Are you sure you want to delete # %s?', $snapphoto['Snapphoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Snapphoto'), array('action' => 'add')); ?></li>
	</ul>
</div>
