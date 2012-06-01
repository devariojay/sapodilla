<?php
/* Sizes Test cases generated on: 2012-05-23 04:16:07 : 1337739367*/
App::import('Controller', 'Sizes');

class TestSizesController extends SizesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SizesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.size', 'app.product', 'app.photo');

	function startTest() {
		$this->Sizes =& new TestSizesController();
		$this->Sizes->constructClasses();
	}

	function endTest() {
		unset($this->Sizes);
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
