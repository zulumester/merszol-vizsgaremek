<?php

class Quotation
{
  public $id;
  public $type;
  public $emailAddress;
  public $description;
  public $date;

  public function __construct($id, $type, $emailAddress, $description, $date)
  {
    $this->id = $id;
    $this->type = $type;
    $this->emailAddress = $emailAddress;
    $this->description = $description;
    $this->date = $date;
  }
}
