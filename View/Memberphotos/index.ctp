<div class="memberphotos index">
	<h2><?php echo __('Memberphotos'); ?></h2>
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
	<?php foreach ($memberphotos as $memberphoto): ?>
	<tr>
		<td><?php echo h($memberphoto['Memberphoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($memberphoto['Memberphoto']['model']); ?>&nbsp;</td>
		<td><?php echo h($memberphoto['Memberphoto']['foreign_key']); ?>&nbsp;</td>
		<td><?php echo h($memberphoto['Memberphoto']['photo']); ?>&nbsp;</td>
		<td><?php echo h($memberphoto['Memberphoto']['dir']); ?>&nbsp;</td>
		<td><?php echo h($memberphoto['Memberphoto']['type']); ?>&nbsp;</td>
		<td><?php echo h($memberphoto['Memberphoto']['size']); ?>&nbsp;</td>
		<td><?php echo h($memberphoto['Memberphoto']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $memberphoto['Memberphoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $memberphoto['Memberphoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $memberphoto['Memberphoto']['id']), array(), __('Are you sure you want to delete # %s?', $memberphoto['Memberphoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Memberphoto'), array('action' => 'add')); ?></li>
	</ul>
</div>
