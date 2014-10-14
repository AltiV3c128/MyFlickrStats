<?php
App::uses('AppController', 'Controller');

/**
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PortfolioController extends AppController {
	/**
	 * @var array
	 */
	public $uses = array('Flickr');

	public function index(){
		$this->layoutPath = 'Portfolio';
		$this->layout 	  = $this->request->params['action'];

		$this->Flickr->find('all');
	}
}
