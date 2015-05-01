<div class="contenttags form">
<?php echo $this->Form->create('Contenttag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contenttag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contenttag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Contenttag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contenttags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
