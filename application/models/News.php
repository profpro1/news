<?php

namespace application\models;

use application\core\Model;


class News extends Model {

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM news');
	}

	public function postsList($route) {
		$max = 5;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM news ORDER BY idate DESC LIMIT :start, :max', $params);
	}

	
	public function getArticle($id) {
		$params = [
			'id'=>$id,
		];

		return $this->db->row('SELECT * FROM news WHERE id = :id', $params);
	
	}

}

