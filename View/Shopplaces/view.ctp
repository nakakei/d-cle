<div class="shopplaces view">
<h2><?php echo __('Shopplace'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shopplace['Shopplace']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($shopplace['Shopplace']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shopplace'), array('action' => 'edit', $shopplace['Shopplace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shopplace'), array('action' => 'delete', $shopplace['Shopplace']['id']), array(), __('Are you sure you want to delete # %s?', $shopplace['Shopplace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopplaces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopplace'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Shops'); ?></h3>
	<?php if (!empty($shopplace['Shop'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Money'); ?></th>
		<th><?php echo __('Seat'); ?></th>
		<th><?php echo __('Parking'); ?></th>
		<th><?php echo __('Smoke'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Holiday'); ?></th>
		<th><?php echo __('Word'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Acces'); ?></th>
		<th><?php echo __('Map'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shopplace['Shop'] as $shop): ?>
		<tr>
			<td><?php echo $shop['id']; ?></td>
			<td><?php echo $shop['title']; ?></td>
			<td><?php echo $shop['active']; ?></td>
			<td><?php echo $shop['body']; ?></td>
			<td><?php echo $shop['money']; ?></td>
			<td><?php echo $shop['seat']; ?></td>
			<td><?php echo $shop['parking']; ?></td>
			<td><?php echo $shop['smoke']; ?></td>
			<td><?php echo $shop['time']; ?></td>
			<td><?php echo $shop['holiday']; ?></td>
			<td><?php echo $shop['word']; ?></td>
			<td><?php echo $shop['mail']; ?></td>
			<td><?php echo $shop['tel']; ?></td>
			<td><?php echo $shop['acces']; ?></td>
			<td><?php echo $shop['map']; ?></td>
			<td><?php echo $shop['created']; ?></td>
			<td><?php echo $shop['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shops', 'action' => 'view', $shop['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shops', 'action' => 'edit', $shop['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shops', 'action' => 'delete', $shop['id']), array(), __('Are you sure you want to delete # %s?', $shop['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
