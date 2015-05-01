<div class="contentphotos view">
<h2><?php echo __('Contentphoto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contentphoto['Contentphoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($contentphoto['Contentphoto']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($contentphoto['Contentphoto']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($contentphoto['Contentphoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($contentphoto['Contentphoto']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($contentphoto['Contentphoto']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($contentphoto['Contentphoto']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($contentphoto['Contentphoto']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contentphoto'), array('action' => 'edit', $contentphoto['Contentphoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contentphoto'), array('action' => 'delete', $contentphoto['Contentphoto']['id']), array(), __('Are you sure you want to delete # %s?', $contentphoto['Contentphoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contentphotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contentphoto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
