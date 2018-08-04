<?php
require_once 'autoload.php';

class kurtStaff
{
  function newKurtLine($notenum=null,$headerSpan=0)
  {
    $newKurtLine              = new kurtLine();
    $newKurtLine->notenum     = $notenum;
    $newKurtLine->headerSpan  = $headerSpan;
    $this->lines[]            = $newKurtLine;
  }
}
