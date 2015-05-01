<div class="contents view">
<h2><?php echo __('Content'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($content['Content']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($content['Member']['name'], array('controller' => 'members', 'action' => 'view', $content['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($content['Content']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($content['Content']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($content['Content']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($content['Content']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($content['Content']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content'), array('action' => 'edit', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content'), array('action' => 'delete', $content['Content']['id']), array(), __('Are you sure you want to delete # %s?', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contentphotos'), array('controller' => 'contentphotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contentphoto'), array('controller' => 'contentphotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenttags'), array('controller' => 'contenttags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenttag'), array('controller' => 'contenttags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contentphotos'); ?></h3>
	<?php if (!empty($content['Contentphoto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Foreign Key'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['Contentphoto'] as $contentphoto): ?>
		<tr>
			<td><?php echo $contentphoto['id']; ?></td>
			<td><?php echo $contentphoto['model']; ?></td>
			<td><?php echo $contentphoto['foreign_key']; ?></td>
			<td><?php echo $contentphoto['photo']; ?></td>
			<td><?php echo $contentphoto['dir']; ?></td>
			<td><?php echo $contentphoto['type']; ?></td>
			<td><?php echo $contentphoto['size']; ?></td>
			<td><?php echo $contentphoto['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contentphotos', 'action' => 'view', $contentphoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contentphotos', 'action' => 'edit', $contentphoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contentphotos', 'action' => 'delete', $contentphoto['id']), array(), __('Are you sure you want to delete # %s?', $contentphoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contentphoto'), array('controller' => 'contentphotos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contenttags'); ?></h3>
	<?php if (!empty($content['Contenttag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['Contenttag'] as $contenttag): ?>
		<tr>
			<td><?php echo $contenttag['id']; ?></td>
			<td><?php echo $contenttag['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contenttags', 'action' => 'view', $contenttag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contenttags', 'action' => 'edit', $contenttag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contenttags', 'action' => 'delete', $contenttag['id']), array(), __('Are you sure you want to delete # %s?', $contenttag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contenttag'), array('controller' => 'contenttags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
