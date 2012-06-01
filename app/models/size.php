<?php
class Size extends AppModel {
	var $name = 'Size';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	//var $hasMany = array(
	//	'Product' => array(
	//		'className' => 'Product',
	//		'foreignKey' => 'size_id',
	//		'dependent' => false,
	//		'conditions' => '',
	//		'fields' => '',
	//		'order' => '',
	//		'limit' => '',
	//		'offset' => '',
	//		'exclusive' => '',
	//		'finderQuery' => '',
	//		'counterQuery' => ''
	//	)
	//);
 
	var $hasAndBelongsToMany = array(
	    'Product' =>
		array(
		    'className'              => 'Product',
		    'joinTable'              => 'products_sizes',
		    'foreignKey'             => 'size_id',
		    'associationForeignKey'  => 'product_id',
		    'unique'                 => true,
		    'conditions'             => '',
		    'fields'                 => '',
		    'order'                  => '',
		    'limit'                  => '',
		    'offset'                 => '',
		    'finderQuery'            => '',
		    'deleteQuery'            => '',
		    'insertQuery'            => ''
		)
	);
}
