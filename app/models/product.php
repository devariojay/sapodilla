<?php
class Product extends AppModel {
	var $name = 'Product';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'photo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'size_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		//'Photo' => array(
		//	'className' => 'Photo',
		//	'foreignKey' => 'photo_id',
		//	'conditions' => '',
		//	'fields' => '',
		//	'order' => ''
		//),
		//'Size' => array(
		//	'className' => 'Size',
		//	'foreignKey' => 'size_id',
		//	'conditions' => '',
		//	'fields' => '',
		//	'order' => ''
		//)
	);

	var $hasMany = array(
		'Photo' => array(
			'className' => 'Photo',
			'foreignKey' => 'product_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		//'Size' => array(
		//	'className' => 'Size',
		//	'foreignKey' => 'product_id',
		//	'dependent' => false,
		//	'conditions' => '',
		//	'fields' => '',
		//	'order' => '',
		//	'limit' => '',
		//	'offset' => '',
		//	'exclusive' => '',
		//	'finderQuery' => '',
		//	'counterQuery' => ''
		//)
	);
	
	var $hasAndBelongsToMany = array(
	    'Size' =>
		array(
		    'className'              => 'Size',
		    'joinTable'              => 'products_sizes',
		    'foreignKey'             => 'product_id',
		    'associationForeignKey'  => 'size_id',
		    'unique'                 => true,
		    'conditions'             => '',
		    'fields'                 => '',
		    'order'                  => '',
		    'limit'                  => '',
		    'offset'                 => '',
		    'finderQuery'            => '',
		    'deleteQuery'            => '',
		    'insertQuery'            => ''
		),
	//    'Photo' =>
	//	array(
	//	    'className'              => 'Photo',
	//	    'joinTable'              => 'photos_products',
	//	    'foreignKey'             => 'product_id',
	//	    'associationForeignKey'  => 'photo_id',
	//	    'unique'                 => false,
	//	    'conditions'             => '',
	//	    'fields'                 => '',
	//	    'order'                  => '',
	//	    'limit'                  => '',
	//	    'offset'                 => '',
	//	    'finderQuery'            => '',
	//	    'deleteQuery'            => '',
	//	    'insertQuery'            => ''
	//	)
	);

}
