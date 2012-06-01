<?php
class PhotosController extends AppController {

	var $name = 'Photos';
	
	function validate_upload($upload){
				
		if($upload['error'] == 0){
		
			//pr($upload);
			//exit;
			$uploadDir = "C:/xampp/htdocs/sapodilla/app/webroot/uploads/";
			if(move_uploaded_file($upload['tmp_name'], $uploadDir . $upload['name'])){
				$this->data['Photo']['location'] = $upload['name'];
				return $this->data['Photo'];
			}else{
				$this->Session->setFlash('There was an error with your upload (2)', 'default', array('class' => 'error'));
				
			}
		}
		
		if($upload['error'] == 4){
			
			$photo = $this->Photo->find('first', array('conditions' => array('Photo.id' => $this->data['Photo']['id'])));
			
			//pr($photo);
			//exit;
			if(empty($photo['Photo']['location'])){
				
				$this->Session->setFlash('There was an error with your upload (2)', 'default', array('class' => 'error'));
				
			}else{
				
				$this->data['Photo']['location'] = $photo['Photo']['location'];
				return $this->data['Photo']['location'];
			}
			
		}
		
	}

	function index() {
		$this->Photo->recursive = 0;
		$this->set('photos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid photo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('photo', $this->Photo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->validate_upload($this->data['Photo']['location']);
			$this->Photo->create();
			if ($this->Photo->save($this->data)) {
				$this->Session->setFlash(__('The photo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The photo could not be saved. Please, try again.', true));
			}
		}
		$products = $this->Photo->Product->find('list');
		$this->set(compact('products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid photo', true));
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this->data)) {
			$this->validate_upload($this->data['Photo']['location']);
			//pr($this->data);
			//exit;
			if ($this->Photo->save($this->data)) {
				$this->Session->setFlash(__('The photo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The photo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Photo->read(null, $id);
		}
		$products = $this->Photo->Product->find('list');
		$this->set(compact('products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for photo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Photo->delete($id)) {
			$this->Session->setFlash(__('Photo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Photo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
