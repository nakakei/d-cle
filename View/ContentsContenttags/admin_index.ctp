<div class="contentsContenttags index">
	<h2><?php echo __('Contents Contenttags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('contenttag_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contentsContenttags as $contentsContenttag): ?>
	<tr>
		<td><?php echo h($contentsContenttag['ContentsContenttag']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contentsContenttag['Content']['title'], array('controller' => 'contents', 'action' => 'view', $contentsContenttag['Content']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contentsContenttag['Contenttag']['name'], array('controller' => 'contenttags', 'action' => 'view', $contentsContenttag['Contenttag']['id'])); ?>
		</td>
		<td><?php echo h($contentsContenttag['ContentsContenttag']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contentsContenttag['ContentsContenttag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contentsContenttag['ContentsContenttag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contentsContenttag['ContentsContenttag']['id']), array(), __('Are you sure you want to delete # %s?', $contentsContenttag['ContentsContenttag']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Contents Contenttag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenttags'), array('controller' => 'contenttags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenttag'), array('controller' => 'contenttags', 'action' => 'add')); ?> </li>
	</ul>
</div>
