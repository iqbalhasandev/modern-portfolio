<?php



/**
 * 
 * Database credentials 
 */

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "modern_portfolio");








/**
 * 
 * 
 * database connect function
 * 
 */
function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}



/**
 * 
 * 
 * confirm db connection
 * 
 */
function confirm_db_connect()
{
    if (mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}



/**
 * 
 * 
 * database disconnect
 * 
 */
function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}




/**
 * 
 * 
 * db escape string
 * 
 */
function db_escape($connection, $string)
{
    return mysqli_real_escape_string($connection, $string);
}




/**
 * 
 * 
 * confirm result set
 * 
 */
function confirm_result_set($result_set)
{
    if (!$result_set) {
        exit("Database query failed.");
        // redirect_to('500.php');
    }
}
