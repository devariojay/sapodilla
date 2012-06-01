<?php
/* Photos Test cases generated on: 2012-05-23 04:15:50 : 1337739350*/
App::import('Controller', 'Photos');

class TestPhotosController extends PhotosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PhotosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.photo', 'app.product');

	function startTest() {
		$this->Photos =& new TestPhotosController();
		$this->Photos->constructClasses();
	}

	function endTest() {
		unset($this->Photos);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
