
<?php
class Server{
 public $name;
 public $ipAddress;
 public $status;
    public function __construct($name, $ipAddress,$status)
    {
        $this->name = $name;
        $this->ipAddress = $ipAddress;
        $this->status= $status;
    }
}
?>
