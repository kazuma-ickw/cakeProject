<?php echo $this->Html->css('bootstrap.css', 'stylesheet'); ?>
<?php echo $this->Html->script('bootstrap.js'); ?>
<h1>タスク追加</h1>

<?php
echo $this->Form->create('post');
echo $this->Form->hidden('user_id', array('value' => $this->request->data['Task']['user_id']));
echo $this->Form->hidden('new', array('value' => '1'));
echo $this->Form->input('task_name', array('type' => 'text', 'label' => 'タスク'));
?>
<div><label>期日</label><input type="date" name="limit_date"></div>
<?php
echo $this->Form->submit('登録', array('class' => 'btn', 'div' => FALSE)); 
echo $this->Form->end();
?>
