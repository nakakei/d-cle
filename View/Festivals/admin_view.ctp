<div class="festivals view">
<h2><?php echo __('Festival'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($festival['Festival']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($festival['Festival']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($festival['Festival']['place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($festival['Festival']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($festival['Festival']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($festival['Festival']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Festival'), array('action' => 'edit', $festival['Festival']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Festival'), array('action' => 'delete', $festival['Festival']['id']), array(), __('Are you sure you want to delete # %s?', $festival['Festival']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Festivals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Festival'), array('action' => 'add')); ?> </li>
	</ul>
</div>
