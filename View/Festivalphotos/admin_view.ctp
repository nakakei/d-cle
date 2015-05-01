<div class="festivalphotos view">
<h2><?php echo __('Festivalphoto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($festivalphoto['Festivalphoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($festivalphoto['Festivalphoto']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($festivalphoto['Festivalphoto']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($festivalphoto['Festivalphoto']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($festivalphoto['Festivalphoto']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($festivalphoto['Festivalphoto']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($festivalphoto['Festivalphoto']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($festivalphoto['Festivalphoto']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Festivalphoto'), array('action' => 'edit', $festivalphoto['Festivalphoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Festivalphoto'), array('action' => 'delete', $festivalphoto['Festivalphoto']['id']), array(), __('Are you sure you want to delete # %s?', $festivalphoto['Festivalphoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Festivalphotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Festivalphoto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
