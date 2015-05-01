<div class="clubcategories index">
	<h2><?php echo __('Clubcategories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lft'); ?></th>
			<th><?php echo $this->Paginator->sort('rght'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clubcategories as $clubcategory): ?>
	<tr>
		<td><?php echo h($clubcategory['Clubcategory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clubcategory['Clubcategory']['name'], array('controller' => 'clubcategories', 'action' => 'view', $clubcategory['Clubcategory']['id'])); ?>
		</td>
		<td><?php echo h($clubcategory['Clubcategory']['lft']); ?>&nbsp;</td>
		<td><?php echo h($clubcategory['Clubcategory']['rght']); ?>&nbsp;</td>
		<td><?php echo h($clubcategory['Clubcategory']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clubcategory['Clubcategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clubcategory['Clubcategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clubcategory['Clubcategory']['id']), null, __('Are you sure you want to delete # %s?', $clubcategory['Clubcategory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Clubcategory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clubcategories'), array('controller' => 'clubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Clubcategory'), array('controller' => 'clubcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
