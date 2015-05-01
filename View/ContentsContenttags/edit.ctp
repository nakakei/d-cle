<div class="contentsContenttags form">
<?php echo $this->Form->create('ContentsContenttag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contents Contenttag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('content_id');
		echo $this->Form->input('contenttag_id');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContentsContenttag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ContentsContenttag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contents Contenttags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenttags'), array('controller' => 'contenttags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenttag'), array('controller' => 'contenttags', 'action' => 'add')); ?> </li>
	</ul>
</div>
