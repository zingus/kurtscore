<?php
require_once 'autoload.php';

class kurtNoteRoll
{
  function __construct($defaultNoteNum = null,$defaultVelocity = null,$defaultDuration = null,$defaultTempo = null)
  {
    $this->defaultNoteNum   = $defaultNoteNum;
    $this->defaultVelocity  = $defaultVelocity;
    $this->defaultDuration  = $defaultDuration;
    $this->defaultTempo     = $defaultTempo;
    $this->notes  = array();
    $this->staves = array();
  }

  function newKurtStaff($velocity=null,$duration=null,$tempo=null,$tuning=null)
  {
    $newKurtStaff           = new kurtStaff();
    $newKurtStaff->velocity = $velocity;
    $newKurtStaff->duration = $duration;
    $newKurtStaff->tuning   = $tuning;
    $this->staves[]         = $newKurtStaff;
    return $newKurtStaff;
  }
}
