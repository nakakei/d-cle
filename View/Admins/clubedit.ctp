<div class="clubs form">

<pre><?php print_r($photo);?></pre>
<?php echo $this->Html->link('イベントの追加',array('action'=>'clubsevent',$id));?>
<h2>イベントリスト</h2>
<?php foreach($events as $event):?>
<?php echo $event['Event']['title']?>
<?php echo $this->Html->link('編集',array('controller'=>'events','action'=>'edit',$event['Event']['id']))?>
<?php endforeach;?>

<?php echo $this->Form->create('Club',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Club'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('body');
		echo $this->Form->input('clibaction');
		echo $this->Form->input('career');
		echo $this->Form->input('number');
		echo $this->Form->input('actionday');
		echo $this->Form->input('actionlocation');
		echo $this->Form->input('membership');
		echo $this->Form->input('closing');
		echo $this->Form->input('representative');
		echo $this->Form->input('email');
		echo $this->Form->input('user_id');
		echo $this->Form->input('clubcategory_id');
	?>
    <?php echo $this->Form->hidden('Attachment.0.id'); ?>
    <?php echo $this->Form->input('Attachment.0.photo', array('type' => 'file')); ?>
    <?php echo $this->Html->image('../files/attachment/photo/'. $photo['Attachment']['0']['id'] .'/'.$photo['Attachment']['0']['photo']);?>
    <?php echo $this->Form->hidden('Attachment.1.id'); ?>
    <?php echo $this->Form->hidden('Attachment.1.model', array('value'=>'club'));?>
    <?php echo $this->Form->input('Attachment.1.photo', array('type' => 'file')); ?>
    <?php echo $this->Html->image('../files/attachment/photo/'. $photo['Attachment']['1']['id'] .'/'.$photo['Attachment']['1']['photo']);?>
    <?php echo $this->Form->hidden('Attachment.2.id'); ?>
    <?php echo $this->Form->hidden('Attachment.2.model', array('value'=>'club'));?>
    <?php echo $this->Form->input('Attachment.2.photo', array('type' => 'file')); ?>
    <?php echo $this->Html->image('../files/attachment/photo/'. $photo['Attachment']['2']['id'] .'/'.$photo['Attachment']['2']['photo']);?>


	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Club.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Club.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubcategories'), array('controller' => 'clubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clubcategory'), array('controller' => 'clubcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachments'), array('controller' => 'attachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
	</ul>
</div>
