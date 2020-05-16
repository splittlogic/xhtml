<?php

/*
|--------------------------------------------------------------------------
| setget - Trait to set and retrieve (get) package variables
|--------------------------------------------------------------------------
|
| get()       - Return requested variable
| set()       - Set given variable
| setAdd()    - Add to array of given variable
| setSingle() - Set given variable - replace if already set
*/


namespace splittlogic\xhtml\Traits;


trait setget
{


  private static $splittlogic = array();


  // Return requested variable
  public function get($name = null)
  {
    // Check if name is set
    if ($name)
    {
      // Check for znest
      if ($name !== 'config'
      && $name !== 'eol'
      && $name !== 'html'
      && $name !== 'id'
      && $name !== 'IDtemp'
      && $name !== 'idcount'
      && $name !== 'splittlogicapp'
      && $name !== 'znest')
      {
        if (!is_null($this->get('znest')))
        {
          $name = $this->get('znest') . '-' . $name;
        }
      }

      // Check if variable exists
      if (isset(self::$splittlogic[$name]))
      {
        return self::$splittlogic[$name];
      // Variable is not set
      } else {
        return null;
      }
    } else {
      // Return all variables
      return self::$splittlogic;
    }
  }


  // Set given variable
  public function set($name = null,$value = null,$type = null)
  {
    // Check if name is set
    if ($name)
    {
      // Check for znest
      if ($name !== 'config'
      && $name !== 'eol'
      && $name !== 'html'
      && $name !== 'id'
      && $name !== 'IDtemp'
      && $name !== 'idcount'
      && $name !== 'splittlogicapp'
      && $name !== 'znest')
      {
        // Check if znest variable is set
        if (!is_null($this->get('znest')))
        {
          $name = $this->get('znest') . '-' . $name;
        }
      }

      // Check for add type
      if ($type == 'add')
      {
        $this->setAdd($name,$value);
      // Set single variable
      } else {
        $this->setSingle($name,$value);
      }
    }
  }


  // Add to array of given variable
  public function setAdd($name = null,$value = null)
  {
    // Check if name is set
    if ($name)
    {
      // Check for value
      if ($value)
      {
        // Check if variable exists
        if (!isset(self::$splittlogic[$name]))
        {
          self::$splittlogic[$name] = array();
        }
        // Add value to variable
        self::$splittlogic[$name][] = $value;
      }
    }
  }


  // Set given variable - replace if already set
  public function setSingle($name = null,$value = null)
  {
    // Check if name is set
    if ($name)
    {
      // Check if value is an array
      if (is_array($value))
      {
        self::$splittlogic[$name] = null;
        self::$splittlogic[$name] = array();
      } else {
        self::$splittlogic[$name] = null;
      }
      // Set given variable
      self::$splittlogic[$name] = $value;
    }
  }


}
