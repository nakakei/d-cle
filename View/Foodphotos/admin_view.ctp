<div class="foodphotos view">
<h2><?php echo __('Foodphoto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foodphoto['Foodphoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($foodphoto['Foodphoto']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($foodphoto['Foodphoto']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($foodphoto['Foodphoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($foodphoto['Foodphoto']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($foodphoto['Foodphoto']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($foodphoto['Foodphoto']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($foodphoto['Foodphoto']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foodphoto'), array('action' => 'edit', $foodphoto['Foodphoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foodphoto'), array('action' => 'delete', $foodphoto['Foodphoto']['id']), array(), __('Are you sure you want to delete # %s?', $foodphoto['Foodphoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodphotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodphoto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
