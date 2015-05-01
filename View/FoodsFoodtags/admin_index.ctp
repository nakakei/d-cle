<div class="foodsFoodtags index">
	<h2><?php echo __('Foods Foodtags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('food_id'); ?></th>
			<th><?php echo $this->Paginator->sort('foodtag_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($foodsFoodtags as $foodsFoodtag): ?>
	<tr>
		<td><?php echo h($foodsFoodtag['FoodsFoodtag']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($foodsFoodtag['Food']['title'], array('controller' => 'foods', 'action' => 'view', $foodsFoodtag['Food']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($foodsFoodtag['Foodtag']['name'], array('controller' => 'foodtags', 'action' => 'view', $foodsFoodtag['Foodtag']['id'])); ?>
		</td>
		<td><?php echo h($foodsFoodtag['FoodsFoodtag']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $foodsFoodtag['FoodsFoodtag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $foodsFoodtag['FoodsFoodtag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $foodsFoodtag['FoodsFoodtag']['id']), array(), __('Are you sure you want to delete # %s?', $foodsFoodtag['FoodsFoodtag']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Foods Foodtag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodtags'), array('controller' => 'foodtags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodtag'), array('controller' => 'foodtags', 'action' => 'add')); ?> </li>
	</ul>
</div>
