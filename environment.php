<?php
# LIVE

define('IN_PRODUCTION', FALSE);
define('DISPLAY_ERRORS', TRUE);
define('ENABLE_OUTGOING_EMAIL', TRUE);

# Toggle this based on whether you want to connect to your local DB or your live DB
define('REMOTE_DB', FALSE);
define('SYSTEM_EMAIL', 'webmaster@cloudsliver.com'); 

if (REMOTE_DB) {
	define('DB_HOST', '');
	define('DB_USER', '');
	define('DB_PASS', '');

} else {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'cloudsli_root');
	define('DB_PASS', 'Boston12345');	
}



# If you want to test parts of your app that behave differently based on the time, you can force the time here.
//define(MIMIC_TIME, "September 30, 2012 12:00pm");