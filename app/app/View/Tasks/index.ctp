<form action="<?php echo h($html->url('/tasks/add')) ?>" method="post" style="margin-bottom:1em">
<p><?php echo $html->input('Task/content') ?>
<?php echo $html->submit('タスクを追加') ?></p>
</form>

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
