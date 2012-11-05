<?php

class Post extends AppModel {

	var $name = 'Post';

	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'タイトルを入力してください。'
		),
		'body' => array(
			'rule' => 'notEmpty',
			'message' => '記事を書いてください'
		)
	);
}

?>
