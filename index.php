<?php

use App\Frontend;
use Config\Settings;
use Log\Stats;

$start_microtime = microtime(1);
error_reporting(-1);

// No direct access to PHP files
define ('INC', true);
define('MODE', 'site');

// Path constants
require_once 'boot.php';

// Run main Application
echo Frontend::getInstance();

// Show debug info including execution time, memory usage and DB queries
if (Settings::get('debug_panel')) Stats::getView();