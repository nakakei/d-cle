<div class="shops form">
<?php echo $this->Form->create('Shop',array(	'type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Shop'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('active');
		echo $this->Form->input('body',array('class'=>'ckeditor'));
		echo $this->Form->input('money');
		echo $this->Form->input('seat');
		echo $this->Form->input('parking');
		echo $this->Form->input('smoke');
		echo $this->Form->input('time');
		echo $this->Form->input('holiday');
		echo $this->Form->input('word');
		echo $this->Form->input('mail');
		echo $this->Form->input('tel');
		echo $this->Form->input('acces');
		echo $this->Form->input('map');
		echo $this->Form->input('Shopgenre');
		echo $this->Form->input('Shopplace');
	?>
    <?php 
		echo $this->Form->hidden('Shopphoto.0.model',array('value'=>'shop'));
	?>
    <?php 
		echo $this->Form->input('Shopphoto.0.photo',array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shops'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shopphotos'), array('controller' => 'shopphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shophoto'), array('controller' => 'shopphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopgenres'), array('controller' => 'shopgenres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopgenre'), array('controller' => 'shopgenres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopplaces'), array('controller' => 'shopplaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shopplace'), array('controller' => 'shopplaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
