<?php
class krt {
  function __construct() {
    $decode=json_decode(file_get_contents('config.json'),true);
    $this->drums    = $decode[   'drums'   ];
    $this->velocity = $decode[  'velocity' ];
    $this->tempo    = $decode[   'tempo'   ];
    $this->defaults = $decode[  'defaults' ];
  }

  function parse($filename) {
    return $this->feed(file_get_contents($data));
  }

  function feed($data) {}

  function play() {}

  function dismantle() {}
}

$krt=new krt();
