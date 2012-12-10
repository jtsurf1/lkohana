<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		/*
		$data = array(); 
		$data['site_name'] = 'Egotist'; 
		$data['random'] = rand(1,10);
		$this->response->body(View::factory('welcome', $data));
		*/
		$view = View::factory('welcome');
		$view->site_name = 'Egotist';
		$view->random = rand(1,10);
		$this->response->body($view);
	}

} // End Welcome
