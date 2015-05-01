<div class="students view">
<h2><?php echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($student['Student']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('University'); ?></dt>
		<dd>
			<?php echo h($student['Student']['university']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Undergraduate'); ?></dt>
		<dd>
			<?php echo h($student['Student']['undergraduate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schoolyear'); ?></dt>
		<dd>
			<?php echo h($student['Student']['schoolyear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($student['Student']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($student['Student']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other'); ?></dt>
		<dd>
			<?php echo h($student['Student']['other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($student['Student']['twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($student['Student']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($student['Student']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($student['Student']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), array(), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentphotos'), array('controller' => 'studentphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentphoto'), array('controller' => 'studentphotos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Studentphotos'); ?></h3>
	<?php if (!empty($student['Studentphoto'])): ?>
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
	<?php foreach ($student['Studentphoto'] as $studentphoto): ?>
		<tr>
			<td><?php echo $studentphoto['id']; ?></td>
			<td><?php echo $studentphoto['model']; ?></td>
			<td><?php echo $studentphoto['foreign_key']; ?></td>
			<td><?php echo $studentphoto['photo']; ?></td>
			<td><?php echo $studentphoto['dir']; ?></td>
			<td><?php echo $studentphoto['type']; ?></td>
			<td><?php echo $studentphoto['size']; ?></td>
			<td><?php echo $studentphoto['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'studentphotos', 'action' => 'view', $studentphoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'studentphotos', 'action' => 'edit', $studentphoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'studentphotos', 'action' => 'delete', $studentphoto['id']), array(), __('Are you sure you want to delete # %s?', $studentphoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Studentphoto'), array('controller' => 'studentphotos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
