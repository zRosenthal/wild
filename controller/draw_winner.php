<?php

require_once("../inc/db.php");

static class Draw_Winner {

  public static function Draw($event_id) {
    $db = new db();

    $q = "SELECT amount, ticket_id FROM entry WHERE event_id = $event_id ORDER BY entry_id DESC LIMIT 1";
    $last_entry = $db->query($q);
    $last_ticket = $last_entry[0] + $last_entry[1];

    return rand(1, $last_ticket);
  }
}

?>