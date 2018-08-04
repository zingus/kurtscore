<?php
class krtNote {
  function __construct($pitch=0,$dur=null,$vel=null) {
    $this->pitch=$pitch;
    $this->duration=$dur;
    $this->velocity=$vel;
  }

  function notenum($baseNote=null) { // 40 is E2
    if(is_int($this->pitch))
      return $this->pitch;
    $baseNoteNum=$baseNote->notenum();
    if(is_numeric($this->pitch))
      $this->pitch+=$baseNoteNum;
  }

  function millisecs($bpm=60) {
  
  }

  function normalize($bpm,$baseNote) {
    $this->pitch=$this->notenum($baseNote);
    $this->duration=$this->millisecs($bpm);
    $this->velocity=$vel;
  }
}
