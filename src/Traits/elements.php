<?php

/*
|--------------------------------------------------------------------------
| elements - Trait to crete xhtml elements
|--------------------------------------------------------------------------
|
| Required Traits:
|   returns
|   set
|   settings
|   tag
|
| a()           - Create anchor element
| abbrtag()     - Create abbreviation element
| acronym()     - Create acronym element
| address()     - Create address element
| b()           - Create bold element
| base()        - Create base element
| big()         - Create big element
| blockquote()  - Create blockquote element
| bodyclose()   - Create close body tag
| bodyopen()    - Create open body tag
| br()          - Create line break element
| button()      - Create button element
| caption()     - Create caption element
| citetag()     - Create cite element
| code()        - Create code element
| comment()     - Create comment element
| css()         - Create CSS link element
| dd()          - Create dd (detail description) element
| del()         - Create del element
| dfn()         - Create dfn (defining) element
| div()         - Create div element
| dl()          - Create dl (description list) element
| dt()          - Create dt (description title) element
| em()          - Create em (emphasize) element
| fieldset()    - Create fieldset element
| form()        - Create form element
| doctype()     - Create doctype element
| h1()          - Create h1 (heading) element
| h2()          - Create h2 (heading) element
| h3()          - Create h3 (heading) element
| h4()          - Create h4 (heading) element
| h5()          - Create h5 (heading) element
| h6()          - Create h6 (heading) element
| head()        - Create head element
| hr()          - Create hr (horizontal rule) element
| htmlclose()   - Create close html tag
| htmlopen()    - Create open html tag
| i()           - Create i (italic) element
| img()         - Create img (image) element
| input()       - Create input element
| ins()         - Create ins element
| js()          - Create JS script element
| kbd()         - Create kbd (keyboard input) element
| labeltag()    - Create label element
| legend()      - Create legend element
| li()          - Create li (list) element
| link()        - Create link tag
| mark()        - Create mark element
| meta()        - Create meta tag
| noscript()    - Create noscript element
| object()      - Create an object tag
| ol()          - Create an ol (ordered list) element
| optgroup()    - Create an optgroup (option group) element
| option()      - Create an option element
| p()           - Create p (paragraph) element
| param()       - Create param (parameter) element
| pagetitle()   - Create title tag
| pre()         - Create pre element
| q()           - Create q (quotation) element
| s()           - Create s (strikethrough) element
| samp()        - Create samp (sample) element
| script()      - Create script element
| select()      - Create select element
| small()       - Create small element
| span()        - Create span element
| strong()      - Create strong element
| styletag()    - Create style element
| sub()         - Create sub (subscript) element
| sup()         - Create sup (superscript) element
| table()       - Create table element
| tbody()       - Create tbody element
| td()          - Create td (table cell) element
| textarea()    - Create textarea element
| th()          - Create th (table header cell) element
| thead()       - Create thead element
| tr()          - Create tr (table row) element
| tt()          - Create tt (teletype text) element
| u()           - Create u (underline) element
| ul()          - Create ul (unordered list) element
| var()         - Create var (variable) element
| xml()         - Create xml element
*/


namespace splittlogic\xhtml\Traits;


trait elements
{


  // Create anchor element
  public function a($content = null,$link = null)
  {
    if ($link)
    {
      // Check if http or https is set
      if (substr($link,0,4) !== 'http' && substr($link,0,5) !== 'https')
      {
        // Check if # is set
        if (substr($link,0,1) == '#')
        {
          $link = url()->current() . '/' . $link;
        } else {
          $link = url($link);
        }
      }

      $this->href($link);
    }

    // Create element
    $this->tag('a',$content);

    return $this;
  }


  // Create abbr element
  public function abbrtag($title = null, $content = null)
  {
    if ($title)
    {
      $this->title($title);
    }

    // Create element
    $this->tag('abbr',$content);

    return $this;
  }


  // Create acronym element
  public function acronym($title = null, $content = null)
  {
    if ($title)
    {
      $this->title($title);
    }

    // Create element
    $this->tag('acronym',$content);

    return $this;
  }


  // Create address element
  public function address($content = null)
  {
    // Create element
    $this->tag('address',$content);

    return $this;
  }


  // Create b element
  public function b($content = null)
  {
    // Create element
    $this->tag('b',$content);

    return $this;
  }


  // Create base element
  public function base($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    if ($content)
    {
      // Verify content is set
      $this->checkContent($content);
    }

    // Create element
    $this->tagline('base','');

    // Set element variable
    $this->setBlade('base');

    return $this;
  }


  // Create big element
  public function big($content = null)
  {
    // Create element
    $this->tag('big',$content);

    return $this;
  }


  // Create blockquote element
  public function blockquote($content = null)
  {
    // Create element
    $this->tag('blockquote',$content);

    return $this;
  }


  // Create close body tag
  public function bodyclose($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('/body','',$content);

    // Set element variable
    $this->setBlade('bodyclose');

    return $this;
  }


  // Create open body tag
  public function bodyopen($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('body','',$content);

    // Set element variable
    $this->setBlade('bodyopen');

    return $this;
  }


  // Create br element
  public function br($number = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('br','');

    // Check for number of br
    if ($number)
    {
      // Declare html
      $html = '';

      // Loop through the number of br to set
      for ($i = 0; $i < $number; $i++)
      {
        $html .= $this->html();
      }

      // Reset html
      $this->setHtml($html);
    }

    return $this;
  }


  // Create button element
  public function button($content = null)
  {
    // Create element
    $this->tag('button',$content);

    return $this;
  }


  // Create caption element
  public function caption($content = null)
  {
    // Create element
    $this->tag('caption',$content);

    return $this;
  }


  // Create cite element
  public function citetag($content = null)
  {
    // Create element
    $this->tag('cite',$content);

    return $this;
  }


  // Create code element
  public function code($content = null)
  {
    // Create element
    $this->tag('code',$content);

    return $this;
  }


  // Create comment element
  public function comment($comment = null)
  {
    $comment = '<!-- ' . $comment . ' -->';

    $this->setHtml($comment);

    return $this;
  }


  // Create CSS link element
  public function css($link = null)
  {
    if ($link)
    {
      $this->href($link);
    }

    // Set rel attribute
    $this->rel('stylesheet');

    // Set type attribute
    $this->type('text/css');

    // Create link element
    $this->link();

    return $this;
  }


  // Create dd element
  public function dd($content = null)
  {
    // Check for znest value
    $z = $this->checkz();

    // Create element
    $this->tag('dd',$content);

    // Add to dls saved
    $this->set($z . 'dls',$this->html(),'add');

    return $this;
  }


  // Create del element
  public function del($content = null)
  {
    // Create element
    $this->tag('del',$content);

    return $this;
  }


  // Create dfn element
  public function dfn($content = null)
  {
    // Create element
    $this->tag('dfn',$content);

    return $this;
  }


  // Create div element
  public function div($content = null)
  {
    // Create element
    $this->tag('div',$content);

    return $this;
  }


  // Create dl element
  public function dl($content = null)
  {
    // Check for content
    if (is_null($content))
    {
      if (is_array($this->get('dls')))
      {
        $content = '';
        foreach ($this->get('dls') as $dls)
        {
          $content .= $dls;
        }
      }
    }

    // Create element
    $this->tag('dl',$content);

    return $this;
  }


  // Create doctype element
  public function doctype($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Verify content is set
    $this->checkContent($content);

    // Create element
    $this->tagline('!DOCTYPE','');

    // Set element variable
    $this->setBlade('doctype');

    return $this;
  }


  // Create dt element
  public function dt($content = null)
  {
    // Check for znest value
    $z = $this->checkz();

    // Create element
    $this->tag('dt',$content);

    // Add to dls saved
    $this->set($z . 'dls',$this->html(),'add');

    return $this;
  }


  // Create em element
  public function em($content = null)
  {
    // Create element
    $this->tag('em',$content);

    return $this;
  }


  // Create fieldset element
  public function fieldset($content = null)
  {
    // Create element
    $this->tag('fieldset',$content);

    return $this;
  }


  // Create form element
  public function form($content = null)
  {
    // Create element
    $this->tag('form',$content);

    return $this;
  }


  // Create h1 element
  public function h1($content = null)
  {
    // Create element
    $this->tag('h1',$content);

    return $this;
  }


  // Create h2 element
  public function h2($content = null)
  {
    // Create element
    $this->tag('h2',$content);

    return $this;
  }


  // Create h3 element
  public function h3($content = null)
  {
    // Create element
    $this->tag('h3',$content);

    return $this;
  }


  // Create h4 element
  public function h4($content = null)
  {
    // Create element
    $this->tag('h4',$content);

    return $this;
  }


  // Create h5 element
  public function h5($content = null)
  {
    // Create element
    $this->tag('h5',$content);

    return $this;
  }


  // Create h6 element
  public function h6($content = null)
  {
    // Create element
    $this->tag('h6',$content);

    return $this;
  }


  // Create head element
  public function head($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tag('head',$content);

    // Set element variable
    $this->setBlade('head');

    return $this;
  }


  // Create hr element
  public function hr($number = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('hr','');

    // Check for number of br
    if ($number)
    {
      // Declare html
      $html = '';

      // Loop through the number of br to set
      for ($i = 0; $i < $number; $i++)
      {
        $html .= $this->html();
      }

      // Reset html
      $this->setHtml($html);
    }

    return $this;
  }


  // Create close html tag
  public function htmlclose($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('/html','',$content);

    // Set element variable
    $this->setBlade('htmlclose');

    return $this;
  }


  // Create open html tag
  public function htmlopen($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('html','',$content);

    // Set element variable
    $this->setBlade('htmlopen');

    return $this;
  }


  // Create i element
  public function i($content = null)
  {
    // Create element
    $this->tag('i',$content);

    return $this;
  }


  // Create img element
  public function img($image = null)
  {
    // Get src if no image set
    if (is_null($image))
    {
      $image = $this->get('src');
    }

    // Check if image is still null
    if (!is_null($image))
    {
      // Check if http or https is set
      if (substr($image,0,4) !== 'http' && substr($image,0,5) !== 'https')
      {
        // Check if image exists with location given
        if (file_exists(public_path() . '/' . $image))
        {
          $image = asset($image);
        } else {
          // Check if image exists in the image directory
          if (file_exists(public_path() . '/images' . '/' . $image))
          {
            $image = asset('images/' . $image);
          }
        }
      }
      // Set src to updated image path
      $this->src($image);
    }

    // Create element
    $this->tagline('img','');

    return $this;
  }


  // Create input element
  public function input($content = null)
  {
    // Create element
    $this->tagline('input','',$content);

    return $this;
  }


  // Create ins element
  public function ins($content = null)
  {
    // Create element
    $this->tag('ins',$content);

    return $this;
  }


  // Create JS element
  public function js($link = null, $location = null)
  {
    if ($link)
    {
      $this->src($link);
    }

    // Create script element
    $this->script(null,$location);

    return $this;
  }


  // Create kbd element
  public function kbd($content = null)
  {
    // Create element
    $this->tag('kbd',$content);

    return $this;
  }


  // Create label element
  public function labeltag($content = null)
  {
    // Create element
    $this->tag('label',$content);

    return $this;
  }


  // Create legend element
  public function legend($content = null)
  {
    // Create element
    $this->tag('legend',$content);

    return $this;
  }


  // Create li element
  public function li($content = null)
  {
    // Check for znest value
    $z = $this->checkz();

    // Create element
    $this->tag('li',$content);

    // Add to lis saved
    $this->set($z . 'lis',$this->html(),'add');

    return $this;
  }


  // Create link element
  public function link($link = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('link','',$link);

    // Set element variable
    $this->setBlade('link','add');

    return $this;
  }


  // Create mark element
  public function mark($content = null)
  {
    // Create element
    $this->tag('mark',$content);

    return $this;
  }


  // Create meta element
  public function meta($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('meta','',$content);

    // Set element variable
    $this->setBlade('meta','add');

    return $this;
  }


  // Create noscript element
  public function noscript($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tag('noscript',$content);

    return $this;
  }


  // Create object element
  public function object($object = null, $location = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tag('object',$object);

    // Check for location
    if ($location)
    {
      // Set element variable
      $this->setBlade('object-' . $location,'add');

    } else if (!is_null($this->get('pagelocation'))) {
      // Set element variable
      $this->setBlade('object-' . $this->get('pagelocation'),'add');

      // Reset page location
      $this->set('pagelocation',null);
    }

    return $this;
  }


  // Create ol element
  public function ol($content = null)
  {
    // Check for content
    if (is_null($content))
    {
      if (is_array($this->get('lis')))
      {
        $content = '';
        foreach ($this->get('lis') as $lis)
        {
          $content .= $lis;
        }
      }
    }

    // Create element
    $this->tag('ol',$content);

    return $this;
  }


  // Create optgroup element
  public function optgroup($content = null)
  {
    // Check for content
    if (is_null($content))
    {
      if (is_array($this->get('options')))
      {
        $content = '';
        foreach ($this->get('options') as $options)
        {
          $content .= $options;
        }
      }
    }

    // Create element
    $this->tag('optgroup',$content);

    return $this;
  }


  // Create option element
  public function option($content = null)
  {
    // Check for znest value
    $z = $this->checkz();

    // Create element
    $this->tag('option',$content);

    // Save option created
    $this->set($z . 'options',$this->html(),'add');

    return $this;
  }


  // Create p element
  public function p($content = null)
  {
    // Create element
    $this->tag('p',$content);

    return $this;
  }


  // Create param element
  public function param($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('param','',$content);

    return $this;
  }


  // Create page title element
  public function pagetitle($title = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tag('title',$title);

    // Set element variable
    $this->setBlade('title');

    return $this;
  }


  // Create pre element
  public function pre($content = null)
  {
    // Create element
    $this->tag('pre',$content);

    return $this;
  }


  // Create q element
  public function q($content = null)
  {
    // Create element
    $this->tag('q',$content);

    return $this;
  }


  // Create s (strikethrough) element
  public function s($content = null)
  {
    // Create element
    $this->tag('s',$content);

    return $this;
  }


  // Create samp element
  public function samp($content = null)
  {
    // Create element
    $this->tag('samp',$content);

    return $this;
  }


  // Create script element
  public function script($script = null, $location = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tag('script',$script);

    // Check for location, default to footer
    if ($location !== 'head')
    {
      if (!is_null($this->get('pagelocation')))
      {
        $location = $this->get('pagelocation');
      } else {
        $location = 'footer';
      }
    }

    // Reset page location
    $this->set('pagelocation',null);

    // Set element variable
    $this->setBlade('script-' . $location,'add');

    return $this;
  }


  // Create select element
  public function select($content = null)
  {
    // Check for content
    if (is_null($content))
    {
      if (is_array($this->get('options')))
      {
        $content = '';
        foreach ($this->get('options') as $options)
        {
          $content .= $options;
        }
      }
    }

    // Create element
    $this->tag('select',$content);

    return $this;
  }


  // Create small element
  public function small($content = null)
  {
    // Create element
    $this->tag('small',$content);

    return $this;
  }


  // Create span element
  public function span($content = null)
  {
    // Create element
    $this->tag('span',$content);

    return $this;
  }


  // Create strong element
  public function strong($content = null)
  {
    // Create element
    $this->tag('strong',$content);

    return $this;
  }


  // Create style element
  public function styletag($style = null, $location = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tag('style',$style);

    // Check for location, default to head
    if ($location !== 'footer')
    {
      if (!is_null($this->get('pagelocation')))
      {
        $location = $this->get('pagelocation');
      } else {
        $location = 'head';
      }
    }

    // Reset page location
    $this->set('pagelocation',null);

    // Set element variable
    $this->setBlade('style-' . $location,'add');

    return $this;
  }


  // Create sub element
  public function sub($content = null)
  {
    // Create element
    $this->tag('sub',$content);

    return $this;
  }


  // Create sup element
  public function sup($content = null)
  {
    // Create element
    $this->tag('sup',$content);

    return $this;
  }


  // Create table element
  public function table($content = null)
  {
    // Check for znest value
    $z = $this->checkz();

    // Save current settings
    $this->save('table');

    // Declare table header
    $thead = '';

    // Check for content
    if (is_null($content))
    {
      // Declare content
      $content = '';

      // Check if rows are set
      if (!is_null($this->get($z . 'save-table-trs')))
      {
        if (is_array($this->get($z . 'save-table-trs')))
        {
          foreach ($this->get($z . 'save-table-trs') as $trs)
          {
            $content .= $trs;
          }
        }
      }

      // Check if table headers are set
      if (!is_null($this->get($z . 'save-table-thead')))
      {
        // Set table header
        $this->thead($this->get($z . 'save-table-thead'));
        $thead = $this->html();

        // Put rows into a body
        $this->tbody($content);
        $content = $this->html();
      }

    }

    // Restore settings
    $this->restore('table');

    // Create element
    $this->tag('table',$thead . $content);

    return $this;
  }


  // Create tbody element
  public function tbody($content = null)
  {
    // Create element
    $this->tag('tbody',$content);

    return $this;
  }


  // Create td element
  public function td($content = null)
  {
    // Check for znest value
    $z = $this->checkz();

    // Create element
    $this->tag('td',$content);

    // Save table cell created
    $this->set($z . 'tds',$this->html(),'add');

    return $this;
  }


  // Create textarea element
  public function textarea($content = null)
  {
    // Create element
    $this->tag('textarea',$content);

    return $this;
  }


  // Create th element
  public function th($content = null)
  {
    // Check for znest value
    $z = $this->checkz();

    // Create element
    $this->tag('th',$content);

    // Save table cell created
    $this->set($z . 'ths',$this->html(),'add');

    return $this;
  }


  // Create thead element
  public function thead($content = null)
  {
    // Create element
    $this->tag('thead',$content);

    return $this;
  }


  // Create tr element
  public function tr($content = null)
  {
    // Check for znest value
    $z = $this->checkz();

    // Declare thead setting
    $thead = false;

    // Check for content
    if (is_null($content))
    {
      $content = '';
      // Check for header row
      if (!is_null($this->get('ths')))
      {
        if (is_array($this->get('ths')))
        {
          $thead = true;
          foreach ($this->get('ths') as $ths)
          {
            $content .= $ths;
          }
        }

      // Check for standard row
      } else if (!is_null($this->get('tds'))) {
        if (is_array($this->get('tds')))
        {
          foreach ($this->get('tds') as $tds)
          {
            $content .= $tds;
          }
        }
      }
    }

    // Create element
    $this->tag('tr',$content);

    // Save table row created
    if ($thead == true)
    {
      $this->set($z . 'thead',$this->html());
    } else {
      $this->set($z . 'trs',$this->html(),'add');
    }

    return $this;
  }


  // Create tt element
  public function tt($content = null)
  {
    // Create element
    $this->tag('tt',$content);

    return $this;
  }


  // Create u (underline) element
  public function u($content = null)
  {
    // Create element
    $this->tag('u',$content);

    return $this;
  }


  // Create ul element
  public function ul($content = null)
  {
    // Check for content
    if (is_null($content))
    {
      if (is_array($this->get('lis')))
      {
        $content = '';
        foreach ($this->get('lis') as $lis)
        {
          $content .= $lis;
        }
      }
    }

    // Create element
    $this->tag('ul',$content);

    return $this;
  }


  // Create var element
  public function var($content = null)
  {
    // Create element
    $this->tag('var',$content);

    return $this;
  }


  // Create xml element
  public function xml($content = null)
  {
    // Check for id
    if (is_null($this->get('IDtemp')))
    {
      $this->id(false);
    }

    // Create element
    $this->tagline('?xml','?', $content);

    // Set element variable
    $this->setBlade('xml');

    return $this;
  }



}
