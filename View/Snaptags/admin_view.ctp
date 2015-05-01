<div class="snaptags view">
<h2><?php echo __('Snaptag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($snaptag['Snaptag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($snaptag['Snaptag']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Snaptag'), array('action' => 'edit', $snaptag['Snaptag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Snaptag'), array('action' => 'delete', $snaptag['Snaptag']['id']), array(), __('Are you sure you want to delete # %s?', $snaptag['Snaptag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Snaptags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snaptag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Snaps'), array('controller' => 'snaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snap'), array('controller' => 'snaps', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Snaps'); ?></h3>
	<?php if (!empty($snaptag['Snap'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('University'); ?></th>
		<th><?php echo __('Undergraduate'); ?></th>
		<th><?php echo __('Schoolyear'); ?></th>
		<th><?php echo __('Love'); ?></th>
		<th><?php echo __('Questionfree'); ?></th>
		<th><?php echo __('Questionanswer'); ?></th>
		<th><?php echo __('Other'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($snaptag['Snap'] as $snap): ?>
		<tr>
			<td><?php echo $snap['id']; ?></td>
			<td><?php echo $snap['name']; ?></td>
			<td><?php echo $snap['university']; ?></td>
			<td><?php echo $snap['undergraduate']; ?></td>
			<td><?php echo $snap['schoolyear']; ?></td>
			<td><?php echo $snap['love']; ?></td>
			<td><?php echo $snap['questionfree']; ?></td>
			<td><?php echo $snap['questionanswer']; ?></td>
			<td><?php echo $snap['other']; ?></td>
			<td><?php echo $snap['created']; ?></td>
			<td><?php echo $snap['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'snaps', 'action' => 'view', $snap['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'snaps', 'action' => 'edit', $snap['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'snaps', 'action' => 'delete', $snap['id']), array(), __('Are you sure you want to delete # %s?', $snap['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Snap'), array('controller' => 'snaps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
