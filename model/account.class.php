<?php
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
public function insert($hash) {
$db = new db();
$data = array();
$data[] = $this->name;
$data[] = $this->email;
$data[] = $this->payment_type;
$data[] = $hash;
$db->insert($data);
}
// GETTERS AND SETTERS
public function getName() {
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
}
}