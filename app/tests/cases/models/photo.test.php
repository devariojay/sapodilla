<?php
/* Photo Test cases generated on: 2012-05-23 04:15:48 : 1337739348*/
App::import('Model', 'Photo');

class PhotoTestCase extends CakeTestCase {
	var $fixtures = array('app.photo', 'app.product');

	function startTest() {
		$this->Photo =& ClassRegistry::init('Photo');
	}

	function endTest() {
		unset($this->Photo);
		ClassRegistry::flush();
	}

}
