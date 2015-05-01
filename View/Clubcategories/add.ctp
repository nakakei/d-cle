<div class="clubcategories form">
<?php echo $this->Form->create('Clubcategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Clubcategory'); ?></legend>
	<?php
		echo $this->Form->input('parent_id');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clubcategories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clubcategories'), array('controller' => 'clubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Clubcategory'), array('controller' => 'clubcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
