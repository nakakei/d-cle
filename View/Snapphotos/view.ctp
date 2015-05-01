<div class="snapphotos view">
<h2><?php echo __('Snapphoto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($snapphoto['Snapphoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($snapphoto['Snapphoto']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($snapphoto['Snapphoto']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($snapphoto['Snapphoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($snapphoto['Snapphoto']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($snapphoto['Snapphoto']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($snapphoto['Snapphoto']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($snapphoto['Snapphoto']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Snapphoto'), array('action' => 'edit', $snapphoto['Snapphoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Snapphoto'), array('action' => 'delete', $snapphoto['Snapphoto']['id']), array(), __('Are you sure you want to delete # %s?', $snapphoto['Snapphoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Snapphotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snapphoto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
