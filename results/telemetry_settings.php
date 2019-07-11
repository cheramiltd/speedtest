<?php

$db_type="mysql"; //Type of db: "mysql", "sqlite" or "postgresql"
$stats_password="examplepass"; //password to login to stats.php. Change this!!!
$enable_id_obfuscation=true; //if set to true, test IDs will be obfuscated to prevent users from guessing URLs of other tests

// Sqlite3 settings
$Sqlite_db_file = "../../speedtest_telemetry.sql";

// Mysql settings
$MySql_username="root";
$MySql_password=$_ENV['MYSQL_ROOT_PASSWORD'];
$MySql_hostname="db";
$MySql_databasename="speedtest";

// Postgresql settings
$PostgreSql_username="USERNAME";
$PostgreSql_password="PASSWORD";
$PostgreSql_hostname="db";
$PostgreSql_databasename="speedtest";


//IMPORTANT: DO NOT ADD ANYTHING BELOW THIS PHP CLOSING TAG, NOT EVEN EMPTY LINES!
?>