<?php
/**
 * Represents the todo item
 *
 * @author Julius Caamic <julius@greenbrainer.com>
 * @copyright Copyright (c) 2015, Julius Caamic
 */
class PomodoroItem extends DataObject {

	/**
	 * Set properties
	 * 
	 * @var array
	 */
	private static $db = array(
		'Title' => 'Text',
		'Description' => 'Text',
		'ExpectedUnits' => 'Int',
		'CompletedUnits' => 'Int'
	);

	/**
	 * Set one relationship
	 * 
	 * @var array
	 */
	private static $has_one = array(
		'List' => 'PomodoroList'
	);

	/**
	 * Set summary fields
	 * 
	 * @var array
	 */
	private static $summary_fields = array(
		'Title' => 'Title',
		'ExpectedUnits' => 'ExpectedUnits'
	);

	/**
	 * Get CMS fields
	 * 
	 * @return FieldList
	 */
	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeFieldFromTab('Root.Main', 'ListID');

		$fields->replaceField('Title', TextField::create('Title'));

		return $fields;
	}
}