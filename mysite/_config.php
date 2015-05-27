<?php

global $project;
$project = 'mysite';

global $database;
$database = 'personal_camatis';

require_once("conf/ConfigureFromEnv.php");

i18n::set_locale('en_GB');