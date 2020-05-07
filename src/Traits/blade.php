<?php

/*
|--------------------------------------------------------------------------
| blade - XHTML Trait to return xhtml elements in view
|--------------------------------------------------------------------------
|
| Required Traits:
|   config
|   elements
|   setget
|
| blade() - Return html of requested element(s) for blade template
*/


namespace splittlogic\xhtml\Traits;


trait blade
{


  // Return html of requested element(s) for blade template
  public static function blade($element = null, $location = null)
  {
    // Check for element
    if ($element)
    {
      $x = new self;
      // xml
      if ($element == 'xml')
      {
        // Check if xml exists
        if (is_null($x->get('blade-xml')))
        {
          $x->xml();
        }
        // Check if xml is blank
        if ($x->get('blade-xml') !== '<?xml?>' &&
        $x->get('blade-xml') !== "<?xml?>\r\n")
        {
          return $x->get('blade-xml');
        }

      // body open
      } else if ($element == 'bodyopen') {
        if (is_null($x->get('blade-bodyopen')))
        {
          $x->bodyopen();
        }
        return $x->get('blade-bodyopen');

      // body close
      } else if ($element == 'bodyclose') {
        if (is_null($x->get('blade-bodyclose')))
        {
          $x->bodyclose();
        }
        return $x->get('blade-bodyclose');

      // doctype
      } else if ($element == 'doctype') {
        if (is_null($x->get('blade-doctype')))
        {
          $x->doctype();
        }
        return $x->get('blade-doctype');

      // Head
      } else if ($element == 'head') {
        if (is_null($x->get('blade-head')))
        {
          $x->head();
        }
        return $x->get('blade-head');

      // html open
      } else if ($element == 'htmlopen') {
        if (is_null($x->get('blade-htmlopen')))
        {
          $x->htmlopen();
        }
        return $x->get('blade-htmlopen');

      // html close
      } else if ($element == 'htmlclose') {
        if (is_null($x->get('blade-htmlclose')))
        {
          $x->htmlclose();
        }
        return $x->get('blade-htmlclose');

      // title
      } else if ($element == 'title') {
        if (is_null($x->get('blade-title')))
        {
          $x->pagetitle();
        }
        return $x->get('blade-title');

      // style
      } else if ($element == 'style') {
        if ($location == 'footer')
        {
          if (is_null($x->get('blade-style-footer')))
          {
            $x->styletag(null,$location);
          }
        } else {
          if (is_null($x->get('blade-style-head')))
          {
            $location = 'head';
            $x->styletag(null,$location);
          }
        }
        return $x->get('blade-style-' . $location);

      // footer
      } else if ($element == 'footer') {
        // Set return
        $return = '';
        // Check for style
        $return .= $x->configMulti('style','footer');
        if (!is_null($x->get('blade-style-footer')))
        {
          foreach ($x->get('blade-style-footer') as $style)
          {
            $return .= $style;
          }
        }

        // Check for script
        $return .= $x->configMulti('js','footer');
        $return .= $x->configMulti('script','footer');
        if (!is_null($x->get('blade-script-footer')))
        {
          foreach ($x->get('blade-script-footer') as $script)
          {
            $return .= $script;
          }
        }

        return $return;

      // element
      } else if ($element == 'element') {
        if (isset($_GET['splittlogicElement']))
        {
          // Check for element
          if (!is_null($x->get('splittlogicElement')))
          {
            return $x->get('splittlogicElement');
          }
        } else {
          return null;
        }
      }
    }
  }


}
