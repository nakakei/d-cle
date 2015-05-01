<div class="shops view">
<h2><?php echo __('Shop'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Money'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['money']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seat'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['seat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parking'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['parking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Smoke'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['smoke']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Holiday'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['holiday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Word'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['word']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acces'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['acces']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Map'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['map']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shop'), array('action' => 'edit', $shop['Shop']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shop'), array('action' => 'delete', $shop['Shop']['id']), array(), __('Are you sure you want to delete # %s?', $shop['Shop']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopphotos'), array('controller' => 'shopphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shophoto'), array('controller' => 'shopphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopgenres'), array('controller' => 'shopgenres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopgenre'), array('controller' => 'shopgenres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopplaces'), array('controller' => 'shopplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopplace'), array('controller' => 'shopplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Shopphotos'); ?></h3>
	<?php if (!empty($shop['Shopphoto'])): ?>
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
	<?php foreach ($shop['Shopphoto'] as $shopphoto): ?>
		<tr>
			<td><?php echo $shopphoto['id']; ?></td>
			<td><?php echo $shopphoto['model']; ?></td>
			<td><?php echo $shopphoto['foreign_key']; ?></td>
			<td><?php echo $shopphoto['photo']; ?></td>
			<td><?php echo $shopphoto['dir']; ?></td>
			<td><?php echo $shopphoto['type']; ?></td>
			<td><?php echo $shopphoto['size']; ?></td>
			<td><?php echo $shopphoto['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shopphotos', 'action' => 'view', $shopphoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shopphotos', 'action' => 'edit', $shopphoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shopphotos', 'action' => 'delete', $shopphoto['id']), array(), __('Are you sure you want to delete # %s?', $shopphoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shophoto'), array('controller' => 'shopphotos', 'action' => 'add'.'/'.$shop['Shop']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Shopgenres'); ?></h3>
	<?php if (!empty($shop['Shopgenre'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shop['Shopgenre'] as $shopgenre): ?>
		<tr>
			<td><?php echo $shopgenre['id']; ?></td>
			<td><?php echo $shopgenre['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shopgenres', 'action' => 'view', $shopgenre['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shopgenres', 'action' => 'edit', $shopgenre['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shopgenres', 'action' => 'delete', $shopgenre['id']), array(), __('Are you sure you want to delete # %s?', $shopgenre['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shopgenre'), array('controller' => 'shopgenres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Shopplaces'); ?></h3>
	<?php if (!empty($shop['Shopplace'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shop['Shopplace'] as $shopplace): ?>
		<tr>
			<td><?php echo $shopplace['id']; ?></td>
			<td><?php echo $shopplace['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shopplaces', 'action' => 'view', $shopplace['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shopplaces', 'action' => 'edit', $shopplace['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shopplaces', 'action' => 'delete', $shopplace['id']), array(), __('Are you sure you want to delete # %s?', $shopplace['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shopplace'), array('controller' => 'shopplaces', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
