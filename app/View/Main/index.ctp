<?php echo $this->Html->css('bootstrap.css', 'stylesheet'); ?>
<?php echo $this->Html->script('bootstrap.js'); ?>

<body>
	<h1 class="Heading">タスク管理</h1>
	<h2><?php echo h($user[0]['User']['name']); ?>さん</h2>
	<?php echo $this->Html->link(__('タスク追加'), array('controller' => 'tasks', 'action' => 'add')); ?>

</body>
