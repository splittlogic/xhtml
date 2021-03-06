<?php

/*
|--------------------------------------------------------------------------
| check - XHTML Trait to verify variables & settings
|--------------------------------------------------------------------------
|
| Require Traits:
|   config
|   setget
|   settings
|
| checkSplittlogicApp() - Check splittlogic app setting
| checkConfig()         - Check config file settings
| checkContent()        - Verify content variable is set
| checkEOL()            - Check eol settings and return processed content
*/


namespace splittlogic\xhtml\Traits;


trait check
{


  // Check splittlogic app
  private function checkSplittlogicApp()
  {
    // Check if app is set
    if (is_null($this->get('splittlogicapp')))
    {
      // Set xhtml as the default
      $this->set('splittlogicapp','xhtml');
    }
  }


  // Check config file settings
  private function checkConfig($tag = null)
  {
    // Check if splittlogic app is set
    $this->checkSplittlogicApp();

    // Check if config is set
    if (is_null($this->get('config')))
    {
      $this->set('config','default');
    }

    // Cleanup tag for config
    $tag = $this->configTagClean($tag);

    // Verify tag is set
    if ($tag)
    {
      // Check if config tag file is set
      if (config($this->get('splittlogicapp') . '.' . $this->get('config') . '.' . $tag) || $tag == 'head')
      {
        if ($tag == 'xml' ||
          $tag == 'body' ||
          $tag == 'doctype' ||
          $tag == 'html' ||
          $tag == 'title' ||
          $tag == 'base')
        {
          $this->configStandard(config($this->get('splittlogicapp') . '.' . $this->get('config') . '.' . $tag),true);
        // Check for head
        } else if ($tag == 'head') {
          $this->configHead(config($this->get('splittlogicapp') . '.' . $this->get('config') . '.' . $tag));
        }
      }
    }
  }


  // Verify content variable is set
  private function checkContent($content = null,$add = null)
  {
    // Check if given content is null
    if ($content)
    {
      // Set content variable
      $this->content($content,$add);
    }
  }


  // Check eol settings and return processed content
  private function checkEOL($content = null,$eol = null,$add = null)
  {
    // Check for eol
    if ($this->get('eol') === true || $eol === true)
    {
      $break = PHP_EOL;
    } else {
      $break = '';
    }

    // Check for array
    if (is_array($content))
    {
      // Convert to string
      $contentString = implode($break,$content) . $break;
    } else {
      if ($add)
      {
        $contentString = $content . $break;
      } else {
        $contentString = $content;
      }
    }
    return $contentString;
  }


  // Check znest value
  private function checkz()
  {
    if (is_null($this->get('znest')))
    {
      $znest = null;
    } else {
      $znest = $this->get('znest') . '-';
    }
    return $znest;
  }


}
