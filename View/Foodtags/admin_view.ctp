<div class="foodtags view">
<h2><?php echo __('Foodtag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foodtag['Foodtag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($foodtag['Foodtag']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foodtag'), array('action' => 'edit', $foodtag['Foodtag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foodtag'), array('action' => 'delete', $foodtag['Foodtag']['id']), array(), __('Are you sure you want to delete # %s?', $foodtag['Foodtag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodtags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodtag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Foods'); ?></h3>
	<?php if (!empty($foodtag['Food'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Foodplace Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($foodtag['Food'] as $food): ?>
		<tr>
			<td><?php echo $food['id']; ?></td>
			<td><?php echo $food['title']; ?></td>
			<td><?php echo $food['body']; ?></td>
			<td><?php echo $food['foodplace_id']; ?></td>
			<td><?php echo $food['active']; ?></td>
			<td><?php echo $food['created']; ?></td>
			<td><?php echo $food['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foods', 'action' => 'view', $food['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foods', 'action' => 'edit', $food['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foods', 'action' => 'delete', $food['id']), array(), __('Are you sure you want to delete # %s?', $food['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
