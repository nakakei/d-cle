<div class="contentphotos index">
	<h2><?php echo __('Contentphotos'); ?></h2>
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
	<?php foreach ($contentphotos as $contentphoto): ?>
	<tr>
		<td><?php echo h($contentphoto['Contentphoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($contentphoto['Contentphoto']['model']); ?>&nbsp;</td>
		<td><?php echo h($contentphoto['Contentphoto']['foreign_key']); ?>&nbsp;</td>
		<td><?php echo h($contentphoto['Contentphoto']['photo']); ?>&nbsp;</td>
		<td><?php echo h($contentphoto['Contentphoto']['dir']); ?>&nbsp;</td>
		<td><?php echo h($contentphoto['Contentphoto']['type']); ?>&nbsp;</td>
		<td><?php echo h($contentphoto['Contentphoto']['size']); ?>&nbsp;</td>
		<td><?php echo h($contentphoto['Contentphoto']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contentphoto['Contentphoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contentphoto['Contentphoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contentphoto['Contentphoto']['id']), array(), __('Are you sure you want to delete # %s?', $contentphoto['Contentphoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contentphoto'), array('action' => 'add')); ?></li>
	</ul>
</div>
