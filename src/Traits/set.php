<?php

/*
|--------------------------------------------------------------------------
| set - XHTML Trait to set variables
|--------------------------------------------------------------------------
|
| Required Traits:
|   setget
|
| setAttributes() - Return string of attributes
| setBlade()      - Set blade variables
| setClasses()    - Set class html string and return
| setHtml()       - Set html variable
| setID()         - Set id string
| setIDcount()    - Set ID Counter
*/


namespace splittlogic\xhtml\Traits;


use Route;


trait set
{


  // Return string of attributes
  private function setAttributes()
  {
    // Check if attributes are empty
    if (is_null($this->get('attributes')))
    {
      return null;
    } else {
      // Declare return
      $return = '';

      // Cycle through all attributes
      foreach ($this->get('attributes') as $attribute)
      {
        // Get key and value of attribute
        foreach ($attribute as $att => $value)
        {
          // Set attribute
          $return .= ' ' . $att . '="' . $value . '"';
        }
      }
      // Return attributes
      return $return;
    }
  }


  // Set blade variables
  private function setBlade($tag,$add = null)
  {
    $this->set('blade-' . $tag,$this->html(),$add);
  }


  // Set class html string and return
  private function setClasses()
  {
    // Check if classes are empty
    if (is_null($this->get('classes')))
    {
      return null;
    } else {
      // Declare return
      $return = '';

      // Set space check
      $spaceCheck = 0;

      // Cycle through all classes
      foreach ($this->get('classes') as $class)
      {
        // Check if space is needed
        if ($spaceCheck == 0) {$return .= $class;}
        else {$return .= ' ' . $class;}

        // Increase space check counter
        $spaceCheck++;
      }
    }
    // Return classes string
    return $return;
  }


  // Set extra fields for element
  private function setExtraField($field = null)
  {
    if ($field)
    {
      $this->set('extrafields',$this->get('extrafields') . ' ' . $field);
    }
  }


  // Set html variable
  private function setHtml($html = null)
  {
    $this->set('html',$this->checkEOL($html,null,'add'));

    // Check for splittlogicElement variable request
    if (isset($_GET['splittlogicElement']))
    {
      // Check if id matches splittlogicElement
      if ($this->id() == $_GET['splittlogicElement'])
      {
        $this->set('splittlogicElement',$this->html());
      }
    }
  }


  // Set id string
  private function setID()
  {
    // Check if id is set
    $id = $this->get('IDtemp');
    if ($id || $id === false)
    {
      $this->set('id',$this->get('IDtemp'));
    } else {
      // Increase id element counter
      $this->setIDcount();

      // Set page name (JS can not work with ids with a . )
      $pageName = str_replace('.','_',Route::currentRouteName());

      // Set unique ID
      $this->set('id', $pageName . '_' . $this->get('idcount'));
    }
    // Return ID
    return $this->get('id');
  }


  // Set ID Counter
  private function setIDcount()
  {
    // Check if idcount is set
    if ($this->get('idcount'))
    {
      // Increase the count
      $this->set('idcount',($this->get('idcount') + 1));
    } else {
      // Set initial count
      $this->set('idcount',1);
    }
  }


}
