<?php

/*
 * Filename      globals.php
 * Updated       2015-07-12
 * Description   This module provides global constants and
 *               functions for the entire website.     
 */

define ('PAGE_NAME', basename($_SERVER['REQUEST_URI']));

/* decide which theme to use by date */
$month = date('m');
if ($month == 12 || ($month >= 1 && $month <= 2))
  define ('THEME', 'winter');
else if ($month >= 3 && $month <= 5)
  define ('THEME', 'spring');
else if ($month >= 6 && $month <= 8)
  define ('THEME', 'summer');
else if ($month >= 9 && $month <= 11)
  define ('THEME', 'fall');
else {
  trigger_error ('Invalid date! Could not set theme.');
  die();
}

/* Retrieve and include the appropriate header for the current theme. */
function get_header () {
  include_once ("themes/" . THEME . "/header.php");
}

/* Retrieve and include the appropriate footer for the current theme. */
function get_footer () {
  include_once ("themes/" . THEME . "/footer.php");
}
