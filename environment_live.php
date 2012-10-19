<?php
# LIVE

define('IN_PRODUCTION', TRUE);
define('DISPLAY_ERRORS', FALSE);
define('ENABLE_OUTGOING_EMAIL', TRUE);

# We're on the live server, so always connect to live database
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');