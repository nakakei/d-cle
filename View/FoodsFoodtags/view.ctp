<div class="foodsFoodtags view">
<h2><?php echo __('Foods Foodtag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foodsFoodtag['FoodsFoodtag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foodsFoodtag['Food']['title'], array('controller' => 'foods', 'action' => 'view', $foodsFoodtag['Food']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foodtag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foodsFoodtag['Foodtag']['name'], array('controller' => 'foodtags', 'action' => 'view', $foodsFoodtag['Foodtag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($foodsFoodtag['FoodsFoodtag']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foods Foodtag'), array('action' => 'edit', $foodsFoodtag['FoodsFoodtag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foods Foodtag'), array('action' => 'delete', $foodsFoodtag['FoodsFoodtag']['id']), array(), __('Are you sure you want to delete # %s?', $foodsFoodtag['FoodsFoodtag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods Foodtags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foods Foodtag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foodtags'), array('controller' => 'foodtags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foodtag'), array('controller' => 'foodtags', 'action' => 'add')); ?> </li>
	</ul>
</div>
