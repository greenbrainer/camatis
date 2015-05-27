<?php
/**
 * Represents the list containing the items
 *
 * @author Julius Caamic <julius@greenbrainer.com>
 * @copyright Copyright (c) 2015, Julius Caamic
 */
class PomodoroList extends DataObject {

	/**
	 * Set properties
	 * 
	 * @var array
	 */
	private static $db = array(
		'Title' => 'Varchar',
		'Description' => 'Text'
	);

	/**
	 * Set one relationship
	 * 
	 * @var array
	 */
	private static $has_one = array(
		'Member' => 'Member'
	);

	/**
	 * Set has many relationship
	 * 
	 * @var array
	 */
	private static $has_many = array(
		'Items' => 'PomodoroItem'
	);

	/**
	 * Set summary fields
	 * 
	 * @var array
	 */
	private static $summary_fields = array(
		'Member.getFullName' => 'Member',
		'Title' => 'Title'
	);

	/**
	 * Set searchable fields
	 * 
	 * @var array
	 */
	private static $searchable_fields = array(
		'Title' => 'Title',
		'Member.ID' => array(
			'title' => 'Member'
		)
	);
}