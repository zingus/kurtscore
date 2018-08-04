<?php
class krt {
  function __construct() {
    $decode=json_decode(file_get_contents('defs.json'),true);
    $this->drums=$decode['drums'];
    $this->velocity=$decode['velocity'];
    $this->tempo=$decode['tempo'];
    $this->defaults=$decode['defaults'];
  }
}

$krt=new krt();
