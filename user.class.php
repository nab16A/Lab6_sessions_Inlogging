<?php

class User {

    private $usr_name;          // Holds the users username
    private $usr_full_name;     // Holds the users full name
    private $IPAddress;         // Holds the users login IP address
    private $UserAgent;         // Holds the users user agent (browser ID)
    private $usr_hits;         // Holds the users hitcount

    function __construct($n, $fn) {
        $this->usr_name = $n;
        $this->usr_full_name = $fn;
        //Ta vare på ip-adressen
        $this->IPAddress = $_SERVER["REMOTE_ADDR"];
        //Ta vare på nettleser
        $this->UserAgent = $_SERVER['HTTP_USER_AGENT'];
        //Antall treff
        $this->usr_hits = 0;
    }

    public function setName($newname) { $this->usr_full_name = $newname; }
    public function getUserName() { return $this->usr_name; }
    public function getFullName() { return $this->usr_full_name; }
    public function getHits() { return $this->usr_hits; }
    public function getIPAddress() { return $this->IPAddress; }
    //Sjekke om det er riktig user
    public function verifyUser() {
        if(($this->IPAddress == $_SERVER["REMOTE_ADDR"]) && ($this->UserAgent ==$_SERVER['HTTP_USER_AGENT'] )){
            $this->usr_hits++;
            return true;
        }
        else
            return false;
    }

}