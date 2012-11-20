<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($user['User']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processes'), array('controller' => 'processes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Process'), array('controller' => 'processes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Processes'); ?></h3>
	<?php if (!empty($user['Process'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Task Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Percentage'); ?></th>
		<th><?php echo __('Limit Date'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Complete Flg'); ?></th>
		<th><?php echo __('Delete Flg'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Process'] as $process): ?>
		<tr>
			<td><?php echo $process['id']; ?></td>
			<td><?php echo $process['user_id']; ?></td>
			<td><?php echo $process['task_id']; ?></td>
			<td><?php echo $process['content']; ?></td>
			<td><?php echo $process['percentage']; ?></td>
			<td><?php echo $process['limit_date']; ?></td>
			<td><?php echo $process['time']; ?></td>
			<td><?php echo $process['status']; ?></td>
			<td><?php echo $process['complete_flg']; ?></td>
			<td><?php echo $process['delete_flg']; ?></td>
			<td><?php echo $process['created']; ?></td>
			<td><?php echo $process['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'processes', 'action' => 'view', $process['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'processes', 'action' => 'edit', $process['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'processes', 'action' => 'delete', $process['id']), null, __('Are you sure you want to delete # %s?', $process['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Process'), array('controller' => 'processes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tasks'); ?></h3>
	<?php if (!empty($user['Task'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Percentage'); ?></th>
		<th><?php echo __('Limit Date'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Complete Flg'); ?></th>
		<th><?php echo __('Delete Flg'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Task'] as $task): ?>
		<tr>
			<td><?php echo $task['id']; ?></td>
			<td><?php echo $task['user_id']; ?></td>
			<td><?php echo $task['content']; ?></td>
			<td><?php echo $task['percentage']; ?></td>
			<td><?php echo $task['limit_date']; ?></td>
			<td><?php echo $task['time']; ?></td>
			<td><?php echo $task['status']; ?></td>
			<td><?php echo $task['complete_flg']; ?></td>
			<td><?php echo $task['delete_flg']; ?></td>
			<td><?php echo $task['created']; ?></td>
			<td><?php echo $task['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tasks', 'action' => 'view', $task['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tasks', 'action' => 'edit', $task['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tasks', 'action' => 'delete', $task['id']), null, __('Are you sure you want to delete # %s?', $task['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
