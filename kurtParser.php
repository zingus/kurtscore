<?php
require_once 'autoload.php';

class kurtParser
{
  function __construct()
  {
    $this->defs=json_decode(file_get_contents('defs.json'),true);
    if(is_null($this->defs))
      die("Error while parsing `defs.js`.\n(I'd like to be more specific, but json_decode isn't helping)\n");
    $this->noteRoll=null;
  }

  function feed($data)
  {
    $d=$this->defs['defaults'];
    $this->noteRoll=new kurtNoteRoll($d['notenum'],$d['velocity'],$d['duration'],$d['tempo']);
    preg_replace_callback('/^[ \t]*(?:#(\w+)\s*(.*)|[ \t]*(?:([CDEFGAB])?([#b])?(\d+)?([#b])?|([a-z_]\w+))[ \t]*\|(.*))/mi',array($this,'match'),$data); 
  }

  function match($m)
  {
    @list(,$directive,$arg,$header_pitch,$header_accidental1,$header_octave,$header_accidental2,$header_gmdrum,$row)=$m;
    echo $header_octave,"\n",$row,"\n";
  }
}

//preg_replace('/#(\w+)/');
