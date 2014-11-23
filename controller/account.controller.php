<?php
/**
 * Created by PhpStorm.
 * User: Nuisance
 * Date: 11/23/2014
 * Time: 6:44 AM
 */

require_once('../model/events.class.php');

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['password'] == $_POST['password-confirm']) {
    $ac = new account($_POST['name'], $_POST['email'],$_POST['pay']);
    $ac->save(md5($_POST['password']));
}
