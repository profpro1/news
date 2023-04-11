<?php

return [
	// NewsController
	'' => [
		'controller' => 'news',
		'action' => 'index',
	],
	'{page:\d+}' => [
		'controller' => 'news',
		'action' => 'index',
	],
	'view/{id:\d+}'=> [
		'controller' => 'news',
		'action' => 'article'
	],
	
];