<div class="jobs view">
<h2><?php echo __('Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($job['Job']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($job['Job']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($job['Job']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acces'); ?></dt>
		<dd>
			<?php echo h($job['Job']['acces']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Map'); ?></dt>
		<dd>
			<?php echo h($job['Job']['map']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($job['Job']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($job['Job']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Money'); ?></dt>
		<dd>
			<?php echo h($job['Job']['money']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parttime'); ?></dt>
		<dd>
			<?php echo h($job['Job']['parttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo h($job['Job']['requirement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Treatment'); ?></dt>
		<dd>
			<?php echo h($job['Job']['treatment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mainmoney'); ?></dt>
		<dd>
			<?php echo h($job['Job']['mainmoney']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mainparttime'); ?></dt>
		<dd>
			<?php echo h($job['Job']['mainparttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($job['Job']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($job['Job']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['id']), array(), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Jobphotos'); ?></h3>
	<?php if (!empty($job['Jobphoto'])): ?>
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
	<?php foreach ($job['Jobphoto'] as $jobphoto): ?>
		<tr>
			<td><?php echo $jobphoto['id']; ?></td>
			<td><?php echo $jobphoto['model']; ?></td>
			<td><?php echo $jobphoto['foreign_key']; ?></td>
			<td><?php echo $jobphoto['photo']; ?></td>
			<td><?php echo $jobphoto['dir']; ?></td>
			<td><?php echo $jobphoto['type']; ?></td>
			<td><?php echo $jobphoto['size']; ?></td>
			<td><?php echo $jobphoto['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobphotos', 'action' => 'view', $jobphoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobphotos', 'action' => 'edit', $jobphoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobphotos', 'action' => 'delete', $jobphoto['id']), array(), __('Are you sure you want to delete # %s?', $jobphoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jobphoto'), array('controller' => 'jobphotos', 'action' => 'add'.'/'.$job['Job']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Jobplaces'); ?></h3>
	<?php if (!empty($job['Jobplace'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Jobplace'] as $jobplace): ?>
		<tr>
			<td><?php echo $jobplace['id']; ?></td>
			<td><?php echo $jobplace['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobplaces', 'action' => 'view', $jobplace['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobplaces', 'action' => 'edit', $jobplace['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobplaces', 'action' => 'delete', $jobplace['id']), array(), __('Are you sure you want to delete # %s?', $jobplace['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jobplace'), array('controller' => 'jobplaces', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Jobrequirements'); ?></h3>
	<?php if (!empty($job['Jobrequirement'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Jobrequirement'] as $jobrequirement): ?>
		<tr>
			<td><?php echo $jobrequirement['id']; ?></td>
			<td><?php echo $jobrequirement['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobrequirements', 'action' => 'view', $jobrequirement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobrequirements', 'action' => 'edit', $jobrequirement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobrequirements', 'action' => 'delete', $jobrequirement['id']), array(), __('Are you sure you want to delete # %s?', $jobrequirement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jobrequirement'), array('controller' => 'jobrequirements', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Jobtreatments'); ?></h3>
	<?php if (!empty($job['Jobtreatment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['Jobtreatment'] as $jobtreatment): ?>
		<tr>
			<td><?php echo $jobtreatment['id']; ?></td>
			<td><?php echo $jobtreatment['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobtreatments', 'action' => 'view', $jobtreatment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobtreatments', 'action' => 'edit', $jobtreatment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobtreatments', 'action' => 'delete', $jobtreatment['id']), array(), __('Are you sure you want to delete # %s?', $jobtreatment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jobtreatment'), array('controller' => 'jobtreatments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
