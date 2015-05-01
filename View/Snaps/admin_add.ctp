<div class="snaps form">
<?php echo $this->Form->create('Snap',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Snap'); ?></legend>
    
    <?php 
		echo $this->Form->hidden('Snapphoto.0.model',array('value'=>'snap'));
		echo $this->Form->input('Snapphoto.0.photo',array('type'=>'file'))
	?>


	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('university',array('label'=>'大学'));
		echo $this->Form->input('undergraduate');
		echo $this->Form->input('schoolyear');
		echo $this->Form->input('questionfree');
		echo $this->Form->input('questionanswer');
		echo $this->Form->input('other',array('class'=>'ckeditor'));
		echo $this->Form->input('Snaptag');
	?>
        
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Snaps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Snapphotos'), array('controller' => 'snapphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snapphoto'), array('controller' => 'snapphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Snaptags'), array('controller' => 'snaptags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snaptag'), array('controller' => 'snaptags', 'action' => 'add')); ?> </li>
	</ul>
</div>
