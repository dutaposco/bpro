<?php
// Map Railway MySQL env vars to Laravel format
if (getenv('MYSQLHOST') && !getenv('DB_HOST')) {
    putenv('DB_HOST=' . getenv('MYSQLHOST'));
    putenv('DB_PORT=' . getenv('MYSQLPORT'));
    putenv('DB_DATABASE=' . getenv('MYSQLDATABASE'));
    putenv('DB_USERNAME=' . getenv('MYSQLUSER'));
    putenv('DB_PASSWORD=' . getenv('MYSQLPASSWORD'));
}
