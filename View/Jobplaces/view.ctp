<div class="jobplaces view">
<h2><?php echo __('Jobplace'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobplace['Jobplace']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($jobplace['Jobplace']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobplace'), array('action' => 'edit', $jobplace['Jobplace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobplace'), array('action' => 'delete', $jobplace['Jobplace']['id']), array(), __('Are you sure you want to delete # %s?', $jobplace['Jobplace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobplaces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobplace'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Jobs'); ?></h3>
	<?php if (!empty($jobplace['Job'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Acces'); ?></th>
		<th><?php echo __('Map'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Money'); ?></th>
		<th><?php echo __('Parttime'); ?></th>
		<th><?php echo __('Requirement'); ?></th>
		<th><?php echo __('Treatment'); ?></th>
		<th><?php echo __('Mainmoney'); ?></th>
		<th><?php echo __('Mainparttime'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobplace['Job'] as $job): ?>
		<tr>
			<td><?php echo $job['id']; ?></td>
			<td><?php echo $job['title']; ?></td>
			<td><?php echo $job['active']; ?></td>
			<td><?php echo $job['body']; ?></td>
			<td><?php echo $job['acces']; ?></td>
			<td><?php echo $job['map']; ?></td>
			<td><?php echo $job['tel']; ?></td>
			<td><?php echo $job['mail']; ?></td>
			<td><?php echo $job['money']; ?></td>
			<td><?php echo $job['parttime']; ?></td>
			<td><?php echo $job['requirement']; ?></td>
			<td><?php echo $job['treatment']; ?></td>
			<td><?php echo $job['mainmoney']; ?></td>
			<td><?php echo $job['mainparttime']; ?></td>
			<td><?php echo $job['created']; ?></td>
			<td><?php echo $job['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobs', 'action' => 'delete', $job['id']), array(), __('Are you sure you want to delete # %s?', $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
