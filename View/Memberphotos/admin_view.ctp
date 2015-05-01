<div class="memberphotos view">
<h2><?php echo __('Memberphoto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($memberphoto['Memberphoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($memberphoto['Memberphoto']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($memberphoto['Memberphoto']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($memberphoto['Memberphoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($memberphoto['Memberphoto']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($memberphoto['Memberphoto']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($memberphoto['Memberphoto']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($memberphoto['Memberphoto']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Memberphoto'), array('action' => 'edit', $memberphoto['Memberphoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Memberphoto'), array('action' => 'delete', $memberphoto['Memberphoto']['id']), array(), __('Are you sure you want to delete # %s?', $memberphoto['Memberphoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberphotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memberphoto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
