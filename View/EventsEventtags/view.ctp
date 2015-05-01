<div class="eventsEventtags view">
<h2><?php echo __('Events Eventtag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventsEventtag['EventsEventtag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsEventtag['Event']['title'], array('controller' => 'events', 'action' => 'view', $eventsEventtag['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eventtag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsEventtag['Eventtag']['name'], array('controller' => 'eventtags', 'action' => 'view', $eventsEventtag['Eventtag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($eventsEventtag['EventsEventtag']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Events Eventtag'), array('action' => 'edit', $eventsEventtag['EventsEventtag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Events Eventtag'), array('action' => 'delete', $eventsEventtag['EventsEventtag']['id']), array(), __('Are you sure you want to delete # %s?', $eventsEventtag['EventsEventtag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events Eventtags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events Eventtag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventtags'), array('controller' => 'eventtags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventtag'), array('controller' => 'eventtags', 'action' => 'add')); ?> </li>
	</ul>
</div>
