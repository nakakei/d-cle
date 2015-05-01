<div class="shopphotos view">
<h2><?php echo __('Shopphoto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shopphoto['Shopphoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($shopphoto['Shopphoto']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($shopphoto['Shopphoto']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($shopphoto['Shopphoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($shopphoto['Shopphoto']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($shopphoto['Shopphoto']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($shopphoto['Shopphoto']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($shopphoto['Shopphoto']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shopphoto'), array('action' => 'edit', $shopphoto['Shopphoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shopphoto'), array('action' => 'delete', $shopphoto['Shopphoto']['id']), array(), __('Are you sure you want to delete # %s?', $shopphoto['Shopphoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopphotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopphoto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
