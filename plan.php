<?php


class BasicPlan extends Server{

  
   function __construct( $name,$ipAddress,$status)
    {
        parent::__construct($name, $ipAddress,$status);

            $this->name = $name;
            $this->status = $status;
            $this->ipAddress = $ipAddress;
    }
}

class ProPlan extends Server{
    function __construct( $name,$ipAddress,$status)
    {
        parent::__construct($name, $ipAddress,$status);

            $this->name = $name;
            $this->status = $status;
            $this->ipAddress = $ipAddress;
    }
}
?>