<div class="snapsSnaptags index">
	<h2><?php echo __('Snaps Snaptags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('snap_id'); ?></th>
			<th><?php echo $this->Paginator->sort('snaptag_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($snapsSnaptags as $snapsSnaptag): ?>
	<tr>
		<td><?php echo h($snapsSnaptag['SnapsSnaptag']['id']); ?>&nbsp;</td>
		<td><?php echo h($snapsSnaptag['SnapsSnaptag']['snap_id']); ?>&nbsp;</td>
		<td><?php echo h($snapsSnaptag['SnapsSnaptag']['snaptag_id']); ?>&nbsp;</td>
		<td><?php echo h($snapsSnaptag['SnapsSnaptag']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $snapsSnaptag['SnapsSnaptag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $snapsSnaptag['SnapsSnaptag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $snapsSnaptag['SnapsSnaptag']['id']), array(), __('Are you sure you want to delete # %s?', $snapsSnaptag['SnapsSnaptag']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Snaps Snaptag'), array('action' => 'add')); ?></li>
	</ul>
</div>
