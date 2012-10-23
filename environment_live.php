<?php
# LIVE

#define('IN_PRODUCTION', TRUE);
#define('DISPLAY_ERRORS', FALSE);
#define('ENABLE_OUTGOING_EMAIL', TRUE);

# Toggle this based on whether you want to connect to your local DB or your live DB
define('REMOTE_DB', FALSE);

if (REMOTE_DB) {
	define('DB_HOST', '');
	define('DB_USER', '');
	define('DB_PASS', '');

} else {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');	
}