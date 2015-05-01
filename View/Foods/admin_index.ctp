<div class="foods index">
	<h2><?php echo __('Foods'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('foodplace_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($foods as $food): ?>
	<tr>
		<td><?php echo h($food['Food']['id']); ?>&nbsp;</td>
		<td><?php echo h($food['Food']['title']); ?>&nbsp;</td>
		<td><?php echo h($food['Food']['body']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($food['Foodplace']['title'], array('controller' => 'foodplaces', 'action' => 'view', $food['Foodplace']['id'])); ?>
		</td>
		<td><?php echo h($food['Food']['active']); ?>&nbsp;</td>
		<td><?php echo h($food['Food']['created']); ?>&nbsp;</td>
		<td><?php echo h($food['Food']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $food['Food']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $food['Food']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $food['Food']['id']), array(), __('Are you sure you want to delete # %s?', $food['Food']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Food'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Foodplaces'), array('controller' => 'foodplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodplace'), array('controller' => 'foodplaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodphotos'), array('controller' => 'foodphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodphoto'), array('controller' => 'foodphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodtags'), array('controller' => 'foodtags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodtag'), array('controller' => 'foodtags', 'action' => 'add')); ?> </li>
	</ul>
</div>
