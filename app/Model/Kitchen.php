<?php
App::uses('AppModel', 'Model');
/**
 * Kitchen Model
 *
 * @property Image $Image
 * @property Testimonial $Testimonial
 * @property Subcriteria $Subcriteria
 */
class Kitchen extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'kitchen_id',
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
		'Testimonial' => array(
			'className' => 'Testimonial',
			'foreignKey' => 'kitchen_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Subcriteria' => array(
			'className' => 'Subcriteria',
			'joinTable' => 'kitchens_subcriterias',
			'foreignKey' => 'kitchen_id',
			'associationForeignKey' => 'subcriteria_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}