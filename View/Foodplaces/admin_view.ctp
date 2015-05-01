<div class="foodplaces view">
<h2><?php echo __('Foodplace'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foodplace['Foodplace']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($foodplace['Foodplace']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foodplace'), array('action' => 'edit', $foodplace['Foodplace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foodplace'), array('action' => 'delete', $foodplace['Foodplace']['id']), array(), __('Are you sure you want to delete # %s?', $foodplace['Foodplace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodplaces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodplace'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Foods'); ?></h3>
	<?php if (!empty($foodplace['Food'])): ?>
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
	<?php foreach ($foodplace['Food'] as $food): ?>
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
