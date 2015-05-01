<div class="contents form">
<?php echo $this->Form->create('Content',array(	'type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Content'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('member_id');
		echo $this->Form->input('title');
		echo $this->Form->input('body',array('class'=>'ckeditor'));
		echo $this->Form->input('active');
		echo $this->Form->input('Contenttag');
	?>
    
    <?php 
		echo $this->Form->input('Contentphoto.0.photo',array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Content.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Content.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contentphotos'), array('controller' => 'contentphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contentphoto'), array('controller' => 'contentphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenttags'), array('controller' => 'contenttags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenttag'), array('controller' => 'contenttags', 'action' => 'add')); ?> </li>
	</ul>
</div>
