<?php
/**
 * Created by PhpStorm.
 * User: Nuisance
 * Date: 11/23/2014
 * Time: 9:43 AM
 */



class entry {
    public $name;
    public $email;
    public $eid;
    public $numtics;
    public $winningnum;
    public function __construct($name, $email, $eid, $numtics) {
        $this->name = $name;
        $this->email = $email;
        $this->eid = $eid;
        $this->numtics = $numtics;

        $db = new db();
        $q = $db->query("SELECT amount,ticket_id FROM entry ORDER BY entry_id DESC LIMIT 1");
        $this->winningnum = $q[0] + $q[1];

        $ar = array (
          $name,$email, $eid, $numtics, $this-> winningnum
        );
        $db->insert($ar, "entry");
        $this->confirm_mail($db);
    }
    public function confirm_mail($db) {
        $message = "Thanks for your efforts in helping our fundraiser!";
        $subject = "You Got ".$this->numtics." raffle tickets. ";
        $headers = "From: ". $db->query("SELECT name FROM event WHERE id=$this->eid ") . "\r\n";
        mail($this->email, $subject, $message, $headers );


    }
} 