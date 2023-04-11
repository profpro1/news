<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;


class NewsController extends Controller {

	public function indexAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'news' => $this->model->postsList($this->route),
		];
		$this->view->render('Главная страница', $vars);
	}

	public function articleAction() {
		$vars = [
			'data'=>$this->model->getArticle($this->route['id'])[0],
		];
		// debug($vars);
		$this->view->render('Статья',$vars);	
	}

	

	

	

}