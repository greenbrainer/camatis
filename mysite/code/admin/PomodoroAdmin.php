<?php
/**
 * Represents the admin management for pomodoro
 *
 * @author Julius Caamic <julius@greenbrainer.com>
 * @copyright Copyright (c) 2015, Julius Caamic
 */
class PomodoroAdmin extends ModelAdmin {

	/**
	 * Set managed models
	 * 
	 * @var array
	 */
	private static $managed_models = array(
		'PomodoroList'
	);

	/**
	 * Set url segment 
	 * 
	 * @var string
	 */
	private static $url_segment = 'pomodoro';

	/**
	 * Set menu title
	 * 
	 * @var string
	 */
	private static $menu_title = 'Pomodoro';

	/**
	 * Set menu icon
	 * 
	 * @var string
	 */
	private static $menu_icon = 'mysite/images/tomato-icon.png';
}