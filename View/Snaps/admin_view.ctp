<div class="snaps view">
<h2><?php echo __('Snap'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('University'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['university']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Undergraduate'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['undergraduate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schoolyear'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['schoolyear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Love'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['love']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Questionfree'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['questionfree']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Questionanswer'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['questionanswer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($snap['Snap']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Snap'), array('action' => 'edit', $snap['Snap']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Snap'), array('action' => 'delete', $snap['Snap']['id']), array(), __('Are you sure you want to delete # %s?', $snap['Snap']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Snaps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snap'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Snapphotos'), array('controller' => 'snapphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snapphoto'), array('controller' => 'snapphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Snaptags'), array('controller' => 'snaptags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snaptag'), array('controller' => 'snaptags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Snapphotos'); ?></h3>
	<?php if (!empty($snap['Snapphoto'])): ?>
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
	<?php foreach ($snap['Snapphoto'] as $snapphoto): ?>
		<tr>
			<td><?php echo $snapphoto['id']; ?></td>
			<td><?php echo $snapphoto['model']; ?></td>
			<td><?php echo $snapphoto['foreign_key']; ?></td>
			<td><?php echo $snapphoto['photo']; ?></td>
			<td><?php echo $snapphoto['dir']; ?></td>
			<td><?php echo $snapphoto['type']; ?></td>
			<td><?php echo $snapphoto['size']; ?></td>
			<td><?php echo $snapphoto['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'snapphotos', 'action' => 'view', $snapphoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'snapphotos', 'action' => 'edit', $snapphoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'snapphotos', 'action' => 'delete', $snapphoto['id']), array(), __('Are you sure you want to delete # %s?', $snapphoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Snapphoto'), array('controller' => 'snapphotos', 'action' => 'add'.'/'.$snap['Snap']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Snaptags'); ?></h3>
	<?php if (!empty($snap['Snaptag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($snap['Snaptag'] as $snaptag): ?>
		<tr>
			<td><?php echo $snaptag['id']; ?></td>
			<td><?php echo $snaptag['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'snaptags', 'action' => 'view', $snaptag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'snaptags', 'action' => 'edit', $snaptag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'snaptags', 'action' => 'delete', $snaptag['id']), array(), __('Are you sure you want to delete # %s?', $snaptag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Snaptag'), array('controller' => 'snaptags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
