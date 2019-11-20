<?php
/**
 * 
 * 
 * @version 0.01
 * @author hodoash
 */

 /**
  * 
  *this function creates a database connection based on
  *the constant variables set
  */
function db_conn() {
  $connection = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
  confirm_db_conn($connection);
  return $connection;
}

/**
 * @param string connection
 * this function checks if there is a database connection.
 * It aslo brings an error if there is one
 */
function confirm_db_conn($connection) {
  if($connection->connect_errno) {
    $msg = "Database connection failed: ";
    $msg .= $connection->connect_error;
    $msg .= " (" . $connection->connect_errno . ")";
    exit($msg);
  }
}

/**
 * this function disconects the database
 * and close connection to prevent backdoors.
 */
function db_disconn($connection) {
  if(isset($connection)) {
    $connection->close();
  }
}
?>