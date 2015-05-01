<div class="jobsJobtreatments view">
<h2><?php echo __('Jobs Jobtreatment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobsJobtreatment['JobsJobtreatment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsJobtreatment['Job']['title'], array('controller' => 'jobs', 'action' => 'view', $jobsJobtreatment['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobtreatment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsJobtreatment['Jobtreatment']['name'], array('controller' => 'jobtreatments', 'action' => 'view', $jobsJobtreatment['Jobtreatment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($jobsJobtreatment['JobsJobtreatment']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobs Jobtreatment'), array('action' => 'edit', $jobsJobtreatment['JobsJobtreatment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobs Jobtreatment'), array('action' => 'delete', $jobsJobtreatment['JobsJobtreatment']['id']), array(), __('Are you sure you want to delete # %s?', $jobsJobtreatment['JobsJobtreatment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs Jobtreatments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobs Jobtreatment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtreatments'), array('controller' => 'jobtreatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtreatment'), array('controller' => 'jobtreatments', 'action' => 'add')); ?> </li>
	</ul>
</div>
