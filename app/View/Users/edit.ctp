<?php echo $this->Html->css('bootstrap.css', 'stylesheet'); ?>
<?php echo $this->Html->script('bootstrap.js'); ?>
<?php echo $this->Form->create('User', array('class' => "form-horizontal")); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<div class="control-group">
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		echo $this->Form->input('delete_flg');
	?>
	</div>
	</fieldset>
<?php echo $this->Form->end(array('name' => 'Submit','class' => "btn", 'div' => false)); ?>
	<div class="span4">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'), array('class' => 'btn')); ?></li>
		<li><?php echo $this->Html->link(__('List Processes'), array('controller' => 'processes', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Process'), array('controller' => 'processes', 'action' => 'add'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index'), array('class' => 'btn')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add'), array('class' => 'btn')); ?> </li>
	</ul>
	</div>
