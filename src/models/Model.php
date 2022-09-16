<?php

class Model {
  protected static $tableName = 'users';
  protected static $columns = [];
  protected $values = [];  

  function __construct($arr) {
    $this->loadFromArray($arr);
  }

  public function loadFromArray($arr) {
    if($arr) {
      foreach($arr as $key => $val) {
        $this->$key = $val;
      }
    }
  }

  public function __get($key) {
    return $this->values[$key];
  }

  public function __set($key, $val) {
    $this->values[$key] = $val;
  }
}