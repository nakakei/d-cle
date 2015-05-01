<div class="foods view">
<h2><?php echo __('Food'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($food['Food']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($food['Food']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($food['Food']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foodplace'); ?></dt>
		<dd>
			<?php echo $this->Html->link($food['Foodplace']['title'], array('controller' => 'foodplaces', 'action' => 'view', $food['Foodplace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($food['Food']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($food['Food']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($food['Food']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Food'), array('action' => 'edit', $food['Food']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Food'), array('action' => 'delete', $food['Food']['id']), array(), __('Are you sure you want to delete # %s?', $food['Food']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodplaces'), array('controller' => 'foodplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodplace'), array('controller' => 'foodplaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodphotos'), array('controller' => 'foodphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodphoto'), array('controller' => 'foodphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodtags'), array('controller' => 'foodtags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodtag'), array('controller' => 'foodtags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Foodphotos'); ?></h3>
	<?php if (!empty($food['Foodphoto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Foreign Key'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($food['Foodphoto'] as $foodphoto): ?>
		<tr>
			<td><?php echo $foodphoto['id']; ?></td>
			<td><?php echo $foodphoto['model']; ?></td>
			<td><?php echo $foodphoto['foreign_key']; ?></td>
			<td><?php echo $foodphoto['photo']; ?></td>
			<td><?php echo $foodphoto['dir']; ?></td>
			<td><?php echo $foodphoto['type']; ?></td>
			<td><?php echo $foodphoto['size']; ?></td>
			<td><?php echo $foodphoto['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foodphotos', 'action' => 'view', $foodphoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foodphotos', 'action' => 'edit', $foodphoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foodphotos', 'action' => 'delete', $foodphoto['id']), array(), __('Are you sure you want to delete # %s?', $foodphoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foodphoto'), array('controller' => 'foodphotos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Foodtags'); ?></h3>
	<?php if (!empty($food['Foodtag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($food['Foodtag'] as $foodtag): ?>
		<tr>
			<td><?php echo $foodtag['id']; ?></td>
			<td><?php echo $foodtag['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foodtags', 'action' => 'view', $foodtag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foodtags', 'action' => 'edit', $foodtag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foodtags', 'action' => 'delete', $foodtag['id']), array(), __('Are you sure you want to delete # %s?', $foodtag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foodtag'), array('controller' => 'foodtags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
