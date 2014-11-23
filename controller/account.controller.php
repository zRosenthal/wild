<?php
/**
 * Created by PhpStorm.
 * User: Nuisance
 * Date: 11/23/2014
 * Time: 6:44 AM
 */

require_once('../model/account.class.php');
require_once('../inc/db.php');

if($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "bout to creat accout";
    $ac = new account($_POST['name'], $_POST['email'],"venmo");
    echo "done <br />";
    $ac->save(md5($_POST['password']));
    echo "save <br />";

      header("Location: ../view/events.reg.php");
}
