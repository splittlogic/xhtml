<?php

/*
|--------------------------------------------------------------------------
| reset - XHTML Trait to reset variables
|--------------------------------------------------------------------------
|
| Required Traits:
|   setget
|
| reset()         - Reset class variables based on tag element requested
| resetSettings() - Reset class settings variables
*/


namespace splittlogic\xhtml\Traits;


trait reset
{


  // Reset class variables based on tag element requested
  public function reset($tag)
  {
    // Reset Settings
    $this->resetSettings();

    // Check for varialbes to be reset by tag
    if ($tag == 'dl')
    {
      $this->set('dls',null);
    } else if ($tag == 'ol' || $tag == 'ul') {
      $this->set('lis',null);
    } else if ($tag == 'optgroup' || $tag == 'select') {
      $this->set('options',null);
    } else if ($tag == 'tr') {
      $this->set('tds',null);
      $this->set('ths',null);
    } else if ($tag == 'table') {
      $this->set('trs',null);
      $this->set('thead',null);
      $this->set('theadclasses',null);
      $this->set('tbodyclasses',null);
    } else if ($tag == 'thead') {
      $this->set('theadclasses',null);
    } else if ($tag == 'tbody') {
      $this->set('tbodyclasses',null);
    }

    // Last variable to reset
    $this->set('znest',null);
  }


  // Reset class settings variables
  private function resetSettings()
  {
    $this->set('attributes',null);
    $this->set('classes',null);
    $this->set('content',null);
    $this->set('extrafields',null);
    $this->set('IDtemp',null);

    // config & eol is not reset here to keep formatting
    // throughout all elements
  }


}
