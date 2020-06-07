<?php
interface userInterface{
  public function subscribe($c);
  public function connectServer($server);
}
class User implements userInterface
{
  public $statusUser;
  // public $name;
  // function __construct($name)
  // {
  //   $this->name = $name;
  // }
  public function subscribe($c)
  {
    
    $str  = "{$c->name}: ";
    $str .= " connection is \n";
    $str .= " {$c->status}!\n";
    $this->statusUser = $c->status;
    echo "=======================" . "<br>";
    print $str . "<br>";
  }

  public function connectServer($server)
  {
    if ($this->statusUser == 'fail') {
      $str  = "{$server->name}: ";
      $str .= "is disconnected \n";

      echo "=======================" . "<br>";
      print $str . "<br>";
    } else {
      $str  = "{$server->name}: ";
      $str .= "is connected \n";

      echo "=======================" . "<br>";
      print $str . "<br>";
    }
  }

  public function unsubscribe($c)
  {
    $str  = "{$c->name}: ";
    $str .= " connection is \n";
    $str .= " {$c->status}!\n";

    echo "=======================" . "<br>";
    print $str . "<br>";
  }
}
//subscribe(new BasicPlan());
