<?php
require_once 'autoload.php';

class kurtArgs extends args
{
  function init()
  {
    $this->parser=new kurtParser();
  }
  function handle($args)
  {
    $this->parser->feed(file_get_contents($args));
  }
}

$args=new kurtArgs();
