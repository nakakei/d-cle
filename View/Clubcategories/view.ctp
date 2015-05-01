<div class="clubcategories view">
<h2><?php echo __('Clubcategory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clubcategory['Clubcategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Clubcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clubcategory['ParentClubcategory']['name'], array('controller' => 'clubcategories', 'action' => 'view', $clubcategory['ParentClubcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($clubcategory['Clubcategory']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($clubcategory['Clubcategory']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($clubcategory['Clubcategory']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clubcategory'), array('action' => 'edit', $clubcategory['Clubcategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clubcategory'), array('action' => 'delete', $clubcategory['Clubcategory']['id']), null, __('Are you sure you want to delete # %s?', $clubcategory['Clubcategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubcategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clubcategory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubcategories'), array('controller' => 'clubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Clubcategory'), array('controller' => 'clubcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clubcategories'); ?></h3>
	<?php if (!empty($clubcategory['ChildClubcategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clubcategory['ChildClubcategory'] as $childClubcategory): ?>
		<tr>
			<td><?php echo $childClubcategory['id']; ?></td>
			<td><?php echo $childClubcategory['parent_id']; ?></td>
			<td><?php echo $childClubcategory['lft']; ?></td>
			<td><?php echo $childClubcategory['rght']; ?></td>
			<td><?php echo $childClubcategory['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clubcategories', 'action' => 'view', $childClubcategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clubcategories', 'action' => 'edit', $childClubcategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clubcategories', 'action' => 'delete', $childClubcategory['id']), null, __('Are you sure you want to delete # %s?', $childClubcategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Clubcategory'), array('controller' => 'clubcategories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
