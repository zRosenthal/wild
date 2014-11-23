<?php
/**
 * Created by PhpStorm.
 * User: Nuisance
 * Date: 11/22/2014
 * Time: 7:04 PM
 */
//events.class.
echo "in events class \n";
require_once ('../inc/db.php');
class events
{
    //declares variables
    public $id;
    public $event_name;
    public $city;
    public $state;
    public $zip;
    public $start_date;
    public $end_date;
    public $max_tickets;
    public $ticket_price;
//events constructor
///initializes all vars
    function __construct($data)
    {
        $this->id = (isset($data['id'])) ? $data['id'] : "";
        $this->event_name = (isset($data['event_name'])) ? $data['event_name'] : "";
        $this->city = (isset($data['city'])) ? $data['city'] : "";
        $this->state = (isset($data['state'])) ? $data['state'] : "";
        $this->zip = (isset($data['zip'])) ? $data['zip'] : "";
        $this->start_date = (isset($data['start_date'])) ? $data['start_date'] : "";
        $this->end_date = (isset($data['end_date'])) ? $data['end_date'] : "";
        $this->max_tickets = (isset($data['max_tickets'])) ? $data['max_tickets'] : "";
        $this->ticket_price = (isset($data['ticket_price'])) ? $data['ticket_price'] : "";
    }
    public function save() {
        echo "save function </br>";
        //create data array
        $db = new db();
        echo "after database init </br>";
        $data_for_save = array(
            "'$this->event_name'",
            "'$this->city'",
            "'$this->state'",
            "'$this->zip'",
            "'$this->start_date'",
            "'$this->end_date'",
            "'$this->max_tickets'",
            "'$this->ticket_price'",
            "1"
        );
        echo "dumping save array: ";
       var_dump($data_for_save);
        echo "</br> before insert </br>";
        $this->id = $db->insert($data_for_save, "event");
        echo "after insert </br>";
    }
    public function update($updated_data)
    {
        $db = new db();
        $db->update($updated_data, 'event', 'id = ' . $this->id);
    }
}