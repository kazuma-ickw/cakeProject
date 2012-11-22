

<table>
<tr>
<th>ID</th>
<th>タスク内容</th>
<th>状態</th>
<th>作成日</th>
</tr>
<?php foreach ($tasks as $task) { ?>
<tr>
<td><?php echo h($task['Task']['id']) ?></td>
<td><?php echo h($task['Task']['content']) ?></td>
<td><?php echo h($task['Task']['status']) ?></td>
<td><?php echo h($task['Task']['created']) ?></td>
</tr>
<?php } ?>
</table>
