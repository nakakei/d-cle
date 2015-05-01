<div class="contentsContenttags view">
<h2><?php echo __('Contents Contenttag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contentsContenttag['ContentsContenttag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contentsContenttag['Content']['title'], array('controller' => 'contents', 'action' => 'view', $contentsContenttag['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenttag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contentsContenttag['Contenttag']['name'], array('controller' => 'contenttags', 'action' => 'view', $contentsContenttag['Contenttag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($contentsContenttag['ContentsContenttag']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contents Contenttag'), array('action' => 'edit', $contentsContenttag['ContentsContenttag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contents Contenttag'), array('action' => 'delete', $contentsContenttag['ContentsContenttag']['id']), array(), __('Are you sure you want to delete # %s?', $contentsContenttag['ContentsContenttag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents Contenttags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contents Contenttag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenttags'), array('controller' => 'contenttags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenttag'), array('controller' => 'contenttags', 'action' => 'add')); ?> </li>
	</ul>
</div>
