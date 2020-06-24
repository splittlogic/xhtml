<?php

/*
|--------------------------------------------------------------------------
| save - Trait to save and restore element settings
|--------------------------------------------------------------------------
|
| Require Traits:
|   reset
|   setget
|
| restore() - Restore settings for requested element
| save()    - Save current settings and reset them
*/


namespace splittlogic\xhtml\Traits;


trait save
{


  private $savevariables = array(
    'attributes',
    'classes',
    'content',
    'extrafields',
    'idtemp',
    'pagelocation',
    'tablecaption',
    'thead',
    'tbodyclasses',
    'theadclasses',
    'trs',
  );


  // Save current settings and reset them
  public function save($name)
  {
    // Cycle through variables and save them
    foreach ($this->savevariables as $variable)
    {
      $this->set('save-' . $name . '-' . $variable,$this->get($variable));
    }

    // Reset settings
    $this->reset($name);
  }


  // Add a variable to the save function
  public function savevariable($var = null)
  {
    if ($var)
    {
      $this->savevariables[] = $var;
    }
  }


  // Restore settings for requested element
  public function restore($name)
  {
    // Cycle through variables and restore them and clear them
    foreach ($this->savevariables as $variable)
    {
      $this->set($variable,$this->get('save-' . $name . '-' . $variable));
      $this->set('save-' . $name . '-' . $variable,null);
    }
  }


}
