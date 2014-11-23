<?php
/**
 * Created by PhpStorm.
 * User: Nuisance
 * Date: 11/22/2014
 * Time: 9:58 PM
 */
echo "this sucks \n";
require_once('../model/events.class.php');
echo "before request methos </br>";
if($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "inside request methos </br>";
    $event_array = array (
        "event_name" => $_POST['name'],
        "city" => $_POST['city'],
        "state" => $_POST['state'],
        "zip" => $_POST['zip'],
        "start_date" => $_POST['start'],
        "end_date" => $_POST['end'],
        "max_tickets" => $_POST['max'],
        "ticket_price" => $_POST['price']
    );
    echo "array dump:";
    var_dump($event_array);
    $event_object = new events($event_array);
    echo "after dump </br>";
    $event_object->save();
    echo "event id: ";
    echo $event_object->id;

        echo "end of controller </br>";
   // header("Location: ../view/dashboard.php");
}
