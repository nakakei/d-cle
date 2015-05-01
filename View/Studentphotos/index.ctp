<div class="studentphotos index">
	<h2><?php echo __('Studentphotos'); ?></h2>
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
	<?php foreach ($studentphotos as $studentphoto): ?>
	<tr>
		<td><?php echo h($studentphoto['Studentphoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($studentphoto['Studentphoto']['model']); ?>&nbsp;</td>
		<td><?php echo h($studentphoto['Studentphoto']['foreign_key']); ?>&nbsp;</td>
		<td><?php echo h($studentphoto['Studentphoto']['photo']); ?>&nbsp;</td>
		<td><?php echo h($studentphoto['Studentphoto']['dir']); ?>&nbsp;</td>
		<td><?php echo h($studentphoto['Studentphoto']['type']); ?>&nbsp;</td>
		<td><?php echo h($studentphoto['Studentphoto']['size']); ?>&nbsp;</td>
		<td><?php echo h($studentphoto['Studentphoto']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentphoto['Studentphoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentphoto['Studentphoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentphoto['Studentphoto']['id']), array(), __('Are you sure you want to delete # %s?', $studentphoto['Studentphoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Studentphoto'), array('action' => 'add')); ?></li>
	</ul>
</div>
