<div class="snaptags index">
	<h2><?php echo __('Snaptags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($snaptags as $snaptag): ?>
	<tr>
		<td><?php echo h($snaptag['Snaptag']['id']); ?>&nbsp;</td>
		<td><?php echo h($snaptag['Snaptag']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $snaptag['Snaptag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $snaptag['Snaptag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $snaptag['Snaptag']['id']), array(), __('Are you sure you want to delete # %s?', $snaptag['Snaptag']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Snaptag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Snaps'), array('controller' => 'snaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snap'), array('controller' => 'snaps', 'action' => 'add')); ?> </li>
	</ul>
</div>
