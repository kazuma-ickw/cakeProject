<?php echo $this->Html->css('bootstrap.css', 'stylesheet'); ?>
<?php echo $this->Html->script('bootstrap.js'); ?>
<?php echo $this->Session->flash('test') ?>
<body>
	<h1 class="Heading">タスク管理</h1>
	<h2><?php echo h($user[0]['User']['name']); ?>さん</h2>	
	<table>
		<tr>
			<th>タスク</th>
			<th>進捗率</th>
			<th>期限</th>
			<th>対応時間</th>
			<th>状態</th>
			<th>発生日時</th>
		</tr>
		<?php foreach ($user[0]['Task'] as $key => $task) { ?>
			<tr>
				<td><?php echo h($task['content']); ?></td>
				<td><?php echo h($task['percentage']); ?>%</td>
				<td><?php echo h($task['limit_date']); ?></td>
				<td><?php echo h($task['time']); ?></td>
				<td><?php echo h($task['status']); ?></td>
				<td><?php echo h($task['modified']); ?></td>
			</tr>
		<?php } ?>
	<?php 
		echo $this->Form->create('Task', array('type' => 'post', 'action' => '/add/'));
		echo $this->Form->hidden('user_id', array('value' => $user[0]['User']['id']));
		echo $this->Form->submit('タスク追加', array('class' => 'btn', 'div' => FALSE));
		echo $this->Form->end();
	?>

</body>
