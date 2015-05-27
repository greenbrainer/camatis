<?php
/**
 * Extension to member
 *
 * @author Julius Caamic <julius@greenbrainer.com>
 * @copyright Copyright (c) 2015, Julius Caamic
 */
class MemberExtension extends DataExtension {

	/**
	 * Set properties of db object
	 * 
	 * @var array
	 */
	private static $db = array(
		'RatePerHour' => 'Currency'
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
	 * Get the full name of the member
	 * 
	 * @return string
	 */
	public function getFullName() {
		return $this->owner->FirstName . ' ' . $this->owner->Surname;
	}
}