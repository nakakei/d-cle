<div class="jobphotos view">
<h2><?php echo __('Jobphoto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobphoto['Jobphoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($jobphoto['Jobphoto']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($jobphoto['Jobphoto']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($jobphoto['Jobphoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($jobphoto['Jobphoto']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($jobphoto['Jobphoto']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($jobphoto['Jobphoto']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($jobphoto['Jobphoto']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobphoto'), array('action' => 'edit', $jobphoto['Jobphoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobphoto'), array('action' => 'delete', $jobphoto['Jobphoto']['id']), array(), __('Are you sure you want to delete # %s?', $jobphoto['Jobphoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobphotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobphoto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
