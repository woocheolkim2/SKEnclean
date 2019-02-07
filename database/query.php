<?php


/**
 *
 */
class query
{
    /**
     *
     */
    public function __construct()
    {
    }

    public $server  = "localhost";
    public $user    = "slayersrey";
    public $pass    = "";
    public $catalog = "c9";
    // public $server  = "localhost";
    // public $user    = "slayers9302";
    // public $pass    = "slay0214";
    // public $catalog = "slayers9302";
    
    public function query($query)
    {
        $db=new mysqli($this->server,
                    $this->user,
                    $this->pass,
                    $this->catalog);
        $db->query("set session character_set_connection=utf8;");
        $db->query("set session character_set_results=utf8;");
        $db->query("set session character_set_client=utf8;");
        return $db->query($query);
    }
}

