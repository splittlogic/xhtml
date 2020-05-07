<?php

/*
|--------------------------------------------------------------------------
| return - XHTML Trait to return variables
|--------------------------------------------------------------------------
|
| Required Traits:
|   setget
|
| elementlink() - Return element link for last called element
| html()        - Return set html variable
| id()          - Set id of current element or Return last set element id
*/


namespace splittlogic\xhtml\Traits;


trait returns
{


  // Return html table from given array and/or header
  public function arraytotable($array = null, $headers = null)
  {
    // Save current settings
    $this->save('arraytotable');

    // Check for headers
    if ($headers) {
      if (is_array($headers))
      {
        // Cycle through headers
        foreach ($headers as $head)
        {
          // Set header cell
          $this->th($head);
        }
        // Set header row
        $this->tr();
      }
    }

    // Check given array
    if (is_array($array))
    {
      // Cycle through rows
      foreach ($array as $row)
      {
        // Check row for cells
        if (is_array($row))
        {
          // Cycle through cells
          foreach ($row as $cell)
          {
            $this->td($cell);
          }
          // Set row
          $this->tr();
        }
      }
    }

    // Backup the table head and rows
    $tableheader = $this->get('thead');
    $tablerows = $this->get('trs');

    // Restore settings
    $this->restore('arraytotable');

    // Restore created table head and rows
    $this->set('thead',$tableheader);
    $this->set('trs',$tablerows);

    // Return table
    return $this->table()->html();
  }


  // Return element link for last called element
  public function elementlink($content = null,$id = null)
  {
    // Set id
    if (is_null($id))
    {
      $id = $this->id();
    }

    // Check for id
    if (!is_null($id))
    {
      // Check for html
      if (!is_null($this->html()))
      {
        $this->a($content,'?splittlogicElement=' . $id);
        return $this->html();
      } else {
        return null;
      }
    } else {
      return null;
    }
  }


  // Return set html variable
  public function html()
  {
    return $this->get('html');
  }


  // Set id of current element or Return last set element id
  public function id($id = null)
  {
    // Check if id is set
    if ($id || $id === false)
    {
      // Set id holder
      $this->set('IDtemp',$id);
      return $this;
    } else {
      // Return id
      return $this->get('id');
    }
  }



}
