<div class="jobs index">
	<h2><?php echo __('Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('acces'); ?></th>
			<th><?php echo $this->Paginator->sort('map'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('mail'); ?></th>
			<th><?php echo $this->Paginator->sort('money'); ?></th>
			<th><?php echo $this->Paginator->sort('parttime'); ?></th>
			<th><?php echo $this->Paginator->sort('requirement'); ?></th>
			<th><?php echo $this->Paginator->sort('treatment'); ?></th>
			<th><?php echo $this->Paginator->sort('mainmoney'); ?></th>
			<th><?php echo $this->Paginator->sort('mainparttime'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobs as $job): ?>
	<tr>
		<td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['title']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['active']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['body']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['acces']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['map']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['tel']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['mail']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['money']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['parttime']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['requirement']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['treatment']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['mainmoney']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['mainparttime']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['created']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $job['Job']['id']), array(), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobphotos'), array('controller' => 'jobphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobphoto'), array('controller' => 'jobphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobplaces'), array('controller' => 'jobplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobplace'), array('controller' => 'jobplaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobrequirements'), array('controller' => 'jobrequirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobrequirement'), array('controller' => 'jobrequirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtreatments'), array('controller' => 'jobtreatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtreatment'), array('controller' => 'jobtreatments', 'action' => 'add')); ?> </li>
	</ul>
</div>
