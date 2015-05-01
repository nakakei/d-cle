<div class="members form">
<?php echo $this->Form->create('Member',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Member'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('university');
		echo $this->Form->input('undergraduate');
		echo $this->Form->input('schoolyear');
		echo $this->Form->input('job');
		echo $this->Form->input('other');
	?>
            
    
    <?php 
		echo $this->Form->hidden('Memberphoto.0.model',array('value'=>'memder'));
		echo $this->Form->input('Memberphoto.0.photo',array('type'=>'file'))
	?>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
