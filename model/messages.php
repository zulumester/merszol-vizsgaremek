<?php

class Messages
{
  public $id;
  public $name;
  public $email;
  public $message;
  public $date;

  public function __construct($id, $name,$email, $message, $date)

  {
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->message = $message;
      $this->date = $date;

  }
}

?>
