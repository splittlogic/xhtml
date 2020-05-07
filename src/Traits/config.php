<?php

/*
|--------------------------------------------------------------------------
| config - XHTML Trait to process config file settings
|--------------------------------------------------------------------------
|
| Required Traits:
|   elements
|   returns
|   save
|   setget
|   settings
|   tag
|
| configAttributes()  - Check if config settings have attributes
| configHead()        - Apply config settings to head element
| configID()          - Check for id, if not use config id
| configMulti()       - Return given config elements
| configStandard()    - Apply standard config settings
| configTagClean()    - Clean up tag for simplier naming
*/


namespace splittlogic\xhtml\Traits;


trait config
{


  // Check if config settings have attributes
  private function configAttributes($config)
  {
    // id
    $this->configID($config);

    // archive
    if (isset($config['archive']))
    {
      $this->archive($config['archive']);
    }

    // attributes
    if (isset($config['attributes']))
    {
      foreach ($config['attributes'] as $attribute => $value)
      {
        $this->attribute([$attribute => $value]);
      }
    }

    // charset
    if (isset($config['charset']))
    {
      $this->charset($config['charset']);
    }

    // class
    if (isset($config['class']))
    {
      $this->class($config['class']);
    }

    // classid
    if (isset($config['classid']))
    {
      $this->classid($config['classid']);
    }

    // codebase
    if (isset($config['codebase']))
    {
      $this->codebase($config['codebase']);
    }

    // codetype
    if (isset($config['codetype']))
    {
      $this->codetype($config['codetype']);
    }

    // data
    if (isset($config['data']))
    {
      $this->data($config['data']);
    }

    // encoding
    if (isset($config['encoding']))
    {
      $this->encoding($config['encoding']);
    }

    // height
    if (isset($config['height']))
    {
      $this->height($config['height']);
    }

    // href
    if (isset($config['href']))
    {
      $this->href($config['href']);
    }

    // hreflang
    if (isset($config['hreflang']))
    {
      $this->hreflang($config['hreflang']);
    }

    // Check for location
    if (isset($config['location']))
    {
      $this->set('pagelocation',$config['location']);
    }

    // media
    if (isset($config['media']))
    {
      $this->media($config['media']);
    }

    // name
    if (isset($config['name']))
    {
      $this->name($config['name']);
    }

    // onclick
    if (isset($config['onclick']))
    {
      $this->onclick($config['onclick']);
    }

    // ondblclick
    if (isset($config['ondblclick']))
    {
      $this->ondblclick($config['ondblclick']);
    }

    // onkeydown
    if (isset($config['onkeydown']))
    {
      $this->onkeydown($config['onkeydown']);
    }

    // onkeypress
    if (isset($config['onkeypress']))
    {
      $this->onkeypress($config['onkeypress']);
    }

    // onkeyup
    if (isset($config['onkeyup']))
    {
      $this->onkeyup($config['onkeyup']);
    }

    // onload
    if (isset($config['onload']))
    {
      $this->onload($config['onload']);
    }

    // onmousedown
    if (isset($config['onmousedown']))
    {
      $this->onmousedown($config['onmousedown']);
    }

    // onmousemove
    if (isset($config['onmousemove']))
    {
      $this->onmousemove($config['onmousemove']);
    }

    // onmouseout
    if (isset($config['onmouseout']))
    {
      $this->onmouseout($config['onmouseout']);
    }

    // onmouseover
    if (isset($config['onmouseover']))
    {
      $this->onmouseover($config['onmouseover']);
    }

    // onmouseup
    if (isset($config['onmouseup']))
    {
      $this->onmouseup($config['onmouseup']);
    }

    // onunload
    if (isset($config['onunload']))
    {
      $this->onunload($config['onunload']);
    }

    // profile
    if (isset($config['profile']))
    {
      $this->profile($config['profile']);
    }

    // rel
    if (isset($config['rel']))
    {
      $this->rel($config['rel']);
    }

    // rev
    if (isset($config['rev']))
    {
      $this->rev($config['rev']);
    }

    // src
    if (isset($config['src']))
    {
      $this->src($config['src']);
    }

    // standby
    if (isset($config['standby']))
    {
      $this->standby($config['standby']);
    }

    // style
    if (isset($config['style']))
    {
      $this->style($config['style']);
    }

    // tabindex
    if (isset($config['tabindex']))
    {
      $this->tabindex($config['tabindex']);
    }

    // target
    if (isset($config['target']))
    {
      $this->target($config['target']);
    }

    // title
    if (isset($config['title']))
    {
      $this->title($config['title']);
    }

    // type
    if (isset($config['type']))
    {
      $this->type($config['type']);
    }

    // width
    if (isset($config['width']))
    {
      $this->width($config['width']);
    }

    // version
    if (isset($config['version']))
    {
      $this->version($config['version']);
    }

    // xmlns:xsi
    if (isset($config['xmlnsxsi']))
    {
      $this->xmlnsxsi($config['xmlnsxsi']);
    }
    if (isset($config['xmlns:xsi']))
    {
      $this->xmlnsxsi($config['xmlns:xsi']);
    }

    // xml:lang
    if (isset($config['xmllang']))
    {
      $this->xmllang($config['xmllang']);
    }
    if (isset($config['xml:lang']))
    {
      $this->xmllang($config['xml:lang']);
    }

    // xmlns
    if (isset($config['xmlns']))
    {
      $this->xmlns($config['xmlns']);
    }

    // xmlspace
    if (isset($config['xmlspace']))
    {
      $this->xmlspace($config['xmlspace']);
    }
    if (isset($config['xml:space']))
    {
      $this->xmlspace($config['xml:space']);
    }

    // xsi:schemaLocation
    if (isset($config['xsischemalocation']))
    {
      $this->xsischemalocation($config['xsischemalocation']);
    }
    if (isset($config['xsi:schemalocation']))
    {
      $this->xsischemalocation($config['xsi:schemalocation']);
    }
  }


  // Apply config settings to head element
  private function configHead($config)
  {
    // Declare content to add after restore
    $content = '';

    // Save current settings
    $this->save('head');

    // Check for base
    if (is_null($this->get('blade-base')))
    {
      if (!is_null(config('xhtml.' . $this->get('config') . '.base')))
      {
        $this->base();
        if (!is_null($this->get('blade-base')))
        {
          $content .= $this->get('blade-base');
        }
      }
    } else {
      $content .= $this->get('blade-base');
    }

    // Check for title
    if (is_null($this->get('blade-title')))
    {
      // Check for title config
      if (!is_null(config('xhtml.' . $this->get('config') . '.title')))
      {
        $this->pagetitle();
        $content .= $this->html();
      }
    } else {
      $content .= $this->get('blade-title');
    }

    // Check for meta
    $content .= $this->configMulti('meta');
    if (!is_null($this->get('blade-meta')))
    {
      if (is_array($this->get('blade-meta')))
      {
        foreach ($this->get('blade-meta') as $meta)
        {
          $content .= $meta;
        }
      }
    }

    // Check for description
    if (is_null($this->get('description')))
    {
      // Check for config description
      if (!is_null(config('xhtml.' . $this->get('config') . '.description')))
      {
        $this->meta('name="description" '
          . 'content="' . config('xhtml.' . $this->get('config') . '.description') . '"');
        $content .= $this->html();
      }
    } else {
      $this->meta('name="description" '
        . 'content="' . $this->get('description') . '"');
      $content .= $this->html();
    }

    // Check for keywords
    if (is_null($this->get('keywords')))
    {
      // Check for config description
      if (!is_null(config('xhtml.' . $this->get('config') . '.keywords')))
      {
        $this->meta('name="keywords" '
          . 'content="' . config('xhtml.' . $this->get('config') . '.keywords') . '"');
        $content .= $this->html();
      }
    } else {
      // Check if for keywords array
      if (is_array($this->get('keywords')))
      {
        // Declare keywords
        $keywords = '';

        // Cycle through keywords
        foreach ($this->get('keywords') as $keyword)
        {
          $keywords .= $keyword . ', ';
        }

        $this->meta('name="keywords" '
          . 'content="' . chop($keywords,', ') . '"');
        $content .= $this->html();
      }
    }

    // Check for link & CSS
    $content .= $this->configMulti('css');
    $content .= $this->configMulti('link');
    if (!is_null($this->get('blade-link')))
    {
      if (is_array($this->get('blade-link')))
      {
        foreach ($this->get('blade-link') as $link)
        {
          $content .= $link;
        }
      }
    }

    // Check for style
    $content .= $this->configMulti('style','head');
    if (!is_null($this->get('blade-style-head')))
    {
      foreach ($this->get('blade-style-head') as $style)
      {
        $content .= $style;
      }
    }

    // Check for script
    $content .= $this->configMulti('js', 'head');
    $content .= $this->configMulti('script','head');
    if (!is_null($this->get('blade-script-head')))
    {
      foreach ($this->get('blade-script-head') as $script)
      {
        $content .= $script;
      }
    }

    // Check for object
    $content .= $this->configMulti('object');
    if (!is_null($this->get('blade-object-head')))
    {
      foreach ($this->get('blade-object-head') as $object)
      {
        $content .= $object;
      }
    }

    // Restore settings
    $this->restore('head');

    // Add new content
    $this->checkContent($content,'add');

    // Check for attributes
    $this->configAttributes($config);
  }


  // Check for id, if not use config id
  private function configID($config)
  {
    if (is_null($this->get('IDtemp')))
    {
      if (isset($config['id']))
      {
        $this->id($config['id']);
      } else {
        $this->id(false);
      }
    }
  }


  // Return given config elements
  private function configMulti($tag = null, $location = null)
  {
    // Declare return
    $return = '';

    // Declare no tag run
    $no = '';

    // Check tag
    if ($tag)
    {
      // Set config
      $config = config('xhtml.' . $this->get('config') . '.' . $tag);

      // Check for config
      if ($config)
      {
        // Check that config is an array
        if (is_array($config))
        {
          // Cycle through elements
          foreach ($config as $elem)
          {
            // Create proper tag
            if ($tag == 'css' || $tag == 'link' || $tag == 'meta')
            {
              // Meta
              if ($tag == 'meta')
              {
                if (isset($elem['name']) && isset($elem['content']))
                {
                  $this->configAttributes($elem);
                  $this->attribute(['content' => $elem['content']]);
                  $this->tagline('meta','');
                } else {
                  if (isset($elem['content']))
                  {
                    $this->tagline('meta','',$elem['content']);
                  } else {
                    $this->configAttributes($elem);
                    $this->tagline('meta','');
                  }
                }
              } else {
                // Set element attributes
                $this->configAttributes($elem);

                // Check for CSS
                if ($tag == 'css')
                {
                  $tag = 'link';
                }
                $this->tagline($tag,'');
              }
            } else {
              // Set element attributes
              $this->configAttributes($elem);

              // Check if content is set
              if (isset($elem['content']))
              {
                $this->content($elem['content']);
              }

              // Check for JS
              if ($tag == 'js')
              {
                $tag = 'script';
              }

              // Check for location
              if ($location)
              {
                if (isset($elem['location']))
                {
                  $loc = $elem['location'];
                } else {
                  if ($tag == 'style')
                  {
                    $loc = 'head';
                  }
                  if ($tag == 'script')
                  {
                    $loc = 'footer';
                  }
                }
                if ($loc == $location)
                {
                  $this->tag($tag);
                } else {
                  // Stop from running tag
                  $no = 'stop';
                  // Reset attributes
                  $this->reset($tag);
                }
              } else {
                $this->tag($tag);
              }
            }

            // Check if tag should run
            if ($no !== 'stop')
            {
              // Add to return
              $return .= $this->html();
            }
          }
        }
      }
    }

    return $return;
  }


  // Apply standard config settings
  private function configStandard($config)
  {
    // Check if content is already set
    if (is_null($this->get('content')))
    {
      if (isset($config['content']))
      {
        $this->content($config['content']);
      }
    }

    // Check for attributes
    $this->configAttributes($config);
  }


  // Clean up tag for simplier naming
  private function configTagClean($tag = null)
  {
    if ($tag)
    {
      // Check for xml
      if ($tag == '?xml')
      {
        return 'xml';
      }
      // Check for doctype
      else if ($tag == '!DOCTYPE')
      {
        return 'doctype';
      }
      // all other values
      else
      {
        return $tag;
      }
    } else {
      return null;
    }
  }


}
