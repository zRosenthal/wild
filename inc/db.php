<?php
// Written by Andrew Greenman, November 22nd, 2014.

class db {

  // Database variables.
  private $db_host;
  private $db_name;
  private $db_user;
  private $db_pass;
  private $dbc;

  /*
   * Creates a helper class for dealing with the database.
   */
  public function __construct() {
    $this->db_host = 'localhost';
    $this->db_name = 'zeeechco_fiftyfifty';
    $this->db_user = 'zeeechco_hack';
    $this->db_pass = 'wildhacks5050';
    $this->dbc = $this->connect();
  }


  /*
   * Creates a connection to the database.
   */
  public function connect() {
    $dbc = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name)
     OR die("Unable to connect to MySQL: " + mysqli_connect_error());
    echo "" . mysqli_connect_error();

    mysqli_set_charset($dbc, "utf8");

    return $dbc;
  }

  /*
   * Inserts a new row into the database, returning a unique identifier.
   * $data - Array containing a list of the values to be inserted.
   * $table - Table to insert into.
   */
  public function insert($data, $table)
  {
    array_unshift($data, "''"); // Prepends an empty string for auto_increment fields.

    $table = strtolower($table);
    $values = implode(", ", $data) . ", ''";
    echo "<br />Inserting values: $values into table $table.<br />";
    $sql = "INSERT INTO $table VALUES($values)";
    echo "<br />";

    $r = mysqli_query($this->dbc, $sql)
      OR die("Unable to insert into table: " + mysqli_connect_error());

    if($r) {
      echo "Success!<br />";
      return mysqli_insert_id($this->dbc);
    } else {
      echo "Insert failed...<br />";
      return null;
    }
  }

  /*
   * Updates a row in the database.
   * $data - Array where the keys are the column name
   *   and the value is the data to be entered.
   * $table - Table to update.
   * $conditions - Conditions that will be applied to the WHERE clause.
   */
  public function update($data, $table, $conditions) {
    foreach($data as $column => $value) {
      $sql = "UPDATE $table SET $column = $value WHERE $conditions";
      $r = mysqli_query($this->dbc, $sql)
        OR die("Unable to update table: " + mysqli_connect_error());
    }

    if($r) {
      return true;
    } else {
      return false;
    }
  }

  /*
   * Selects a row from the database and returns it.
   * $table - Table to select from.
   * $conditions - Conditions that will be applied to the WHERE clause.
   */
  public function select($table, $conditions) {
    $sql = "SELECT * FROM $table WHERE $conditions LIMIT 1";
    $r = mysqli_query($this->dbc, $sql)
      OR die("Unable to retrieve from table: " + mysqli_connect_error());

    if($r) {
      return mysqli_fetch_row($r);
    } else {
      return null;
    }
  }

  // GETTERS AND SETTERS
  public function getDbc() {
    return $this->dbc;
  }
}