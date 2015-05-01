<div class="snapsSnaptags view">
<h2><?php echo __('Snaps Snaptag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($snapsSnaptag['SnapsSnaptag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Snap Id'); ?></dt>
		<dd>
			<?php echo h($snapsSnaptag['SnapsSnaptag']['snap_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Snaptag Id'); ?></dt>
		<dd>
			<?php echo h($snapsSnaptag['SnapsSnaptag']['snaptag_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($snapsSnaptag['SnapsSnaptag']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Snaps Snaptag'), array('action' => 'edit', $snapsSnaptag['SnapsSnaptag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Snaps Snaptag'), array('action' => 'delete', $snapsSnaptag['SnapsSnaptag']['id']), array(), __('Are you sure you want to delete # %s?', $snapsSnaptag['SnapsSnaptag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Snaps Snaptags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snaps Snaptag'), array('action' => 'add')); ?> </li>
	</ul>
</div>
