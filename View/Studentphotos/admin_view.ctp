<div class="studentphotos view">
<h2><?php echo __('Studentphoto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentphoto['Studentphoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($studentphoto['Studentphoto']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($studentphoto['Studentphoto']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($studentphoto['Studentphoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($studentphoto['Studentphoto']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($studentphoto['Studentphoto']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($studentphoto['Studentphoto']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($studentphoto['Studentphoto']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studentphoto'), array('action' => 'edit', $studentphoto['Studentphoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Studentphoto'), array('action' => 'delete', $studentphoto['Studentphoto']['id']), array(), __('Are you sure you want to delete # %s?', $studentphoto['Studentphoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentphotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentphoto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
