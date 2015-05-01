<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Job'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('active');
		echo $this->Form->input('body',array('class'=>'ckeditor'));
		echo $this->Form->input('acces');
		echo $this->Form->input('map');
		echo $this->Form->input('tel');
		echo $this->Form->input('mail');
		echo $this->Form->input('money');
		echo $this->Form->input('parttime');
		echo $this->Form->input('requirement');
		echo $this->Form->input('treatment');
		echo $this->Form->input('mainmoney');
		echo $this->Form->input('mainparttime');
		echo $this->Form->input('Jobplace');
		echo $this->Form->input('Jobrequirement');
		echo $this->Form->input('Jobtreatment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Job.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Job.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobphotos'), array('controller' => 'jobphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobphoto'), array('controller' => 'jobphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobplaces'), array('controller' => 'jobplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobplace'), array('controller' => 'jobplaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobrequirements'), array('controller' => 'jobrequirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobrequirement'), array('controller' => 'jobrequirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobtreatments'), array('controller' => 'jobtreatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobtreatment'), array('controller' => 'jobtreatments', 'action' => 'add')); ?> </li>
	</ul>
</div>
