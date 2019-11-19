<?php

function db_conn() {
  $connection = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
  confirm_db_conn($connection);
  return $connection;
}

function confirm_db_conn($connection) {
  if($connection->connect_errno) {
    $msg = "Database connection failed: ";
    $msg .= $connection->connect_error;
    $msg .= " (" . $connection->connect_errno . ")";
    exit($msg);
  }
}

function db_disconn($connection) {
  if(isset($connection)) {
    $connection->close();
  }
}
?>