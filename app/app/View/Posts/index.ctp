
<h1>Blog posts</h1>
<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>
<table>
	<tr>
		<th>Id</th>
		<th>Titleだよ</th>
		<th>Deleteだね</th>
		<th>Editせよ</th>
		<th>Created</th>
		<th>Modified</th>
	</tr>
	<!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Form->postLink(
				'Delete',
				array('action' => 'delete', $post['Post']['id']),
				array('confirm' => 'Are you sure?'));
			?>
		<td>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
		</td>
		<td> <?php echo $post['Post']['created']; ?></td>
		<td> <?php echo $post['Post']['modified']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>

</table>
