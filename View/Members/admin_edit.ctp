<div class="members form">
<?php echo $this->Form->create('Member',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Member'); ?></legend>
        
    
    <?php 
		echo $this->Form->input('Memberphoto.0.photo',array('type'=>'file'));
	?>

    
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('university');
		echo $this->Form->input('undergraduate');
		echo $this->Form->input('schoolyear');
		echo $this->Form->input('job');
		echo $this->Form->input('other');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
