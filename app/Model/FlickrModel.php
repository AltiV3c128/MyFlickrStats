<?php
App::uses('Model', 'AppModel');

/**
 *
 * @package       app.Model
 */
class FlickrModel extends AppModel {
	$this->useTable = false;

	public function find($type = 'first', $query = array()) {
		$this->findQueryType = $type;

		//$query = $this->buildQuery($type, $query);
		if ($query === null) {
			return null;
		}

		try{
			
		} catch() {

		}

		return false; //$this->_readDataSource($type, $query);
	}
}
