<?php

require_once('../inc/db.php');

class account {
private $name;
private $email;
private $payment_type;
private $id;
public function __construct($name, $email, $payment_type) {
$this->name = $name;
$this->email = $email;
$this->payment_type = $payment_type;
}
public function save($hash) {
$db = new db();
$data = array("'$this->name'",
    "'$this->email'",
    "'$this->payment_type'",
    "'$hash'");
    echo "inside save functin";
    var_dump($data);
    echo "done preinging data";
    $db->insert($data, "account");
    echo "done ";
return $data;
}
// GETTERS AND SETTERS
/*public function getName() {
return $name;
}
public function setName($name) {
$this->name = $name;
}
public function getEmail() {
return $email;
}
public function setEmail($email) {
$this->email = $email;
}
public function getId() {
return $id;
}*/
}