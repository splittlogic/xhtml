<?php

/*
|--------------------------------------------------------------------------
| settings - XHTML Trait to set options / settings
|--------------------------------------------------------------------------
|
| Required Traits:
|   check
|   setget
|
| abbr()              - Set abbr attribute
| accept()            - Set accept attribute
| acceptcharset()     - Set accept-charset attribute
| accesskey()         - Set accesskey attribute
| action()            - Set action attribute
| align()             - Set align attribute
| alt()               - Set alt attribute
| archive()           - Set archive attribute
| attribute()         - Set a unique attribute for the element
| axis()              - Set axis attribute
| charset()           - Set charset attribute
| cite()              - Set cite attribute
| class()             - Set class for element
| classid()           - Set classid attribute
| codebase()          - Set codebase attribute
| codetype()          - Set codetype attribute
| cols()              - Set cols attribute
| colspan()           - Set colspan attribute
| config()            - Set config variable
| content()           - Set content for element
| data()              - Set data attribute
| description()       - Set description for page 
| encoding()          - Set encoding attribute
| enctype()           - Set enctype attribute
| eol()               - Toggle eol (End of Line) setting
| headers()           - Set headers attribute
| height()            - Set height attribute
| href()              - Set href attribute
| hreflang()          - Set hreflang attribute
| httpequiv()         - Set http-equiv attribute
| inputmode()         - Set inputmode attribute
| keyword()           - Add keyword for page
| label()             - Set label attribute
| longdesc()          - Set longdesc attribute
| maxlength()         - Set maxlength attribute
| media()             - Set media attribute
| method()            - Set method attribute
| name()              - Set name attribute
| onblur()            - Set onblur attribute
| onchange()          - Set onchange attribute
| onclick()           - Set onclick attribute
| ondblclick()        - Set ondblclick attribute
| onfocus()           - Set onfocus attribute
| onkeydown()         - Set onkeydown attribute
| onkeypress()        - Set onkeypress attribute
| onkeyup()           - Set onkeyup attribute
| onload()            - Set onload attribute
| onmousedown()       - Set onmousedown attribute
| onmousemove()       - Set onmousemove attribute
| onmouseout()        - Set onmouseout attribute
| onmouseover()       - Set onmouseover attribute
| onmouseup()         - Set onmouseup attribute
| onreset()           - Set onreset attribute
| onselect()          - Set onselect attribute
| onsubmit()          - Set onsubmit attribute
| onunload()          - Set onunload attribute
| profile()           - Set profile attribute
| rel()               - Set rel attribute
| rev()               - Set rev attribute
| rows()              - Set rows attribute
| rowspan()           - Set rowspan attribute
| scheme()            - Set scheme attribute
| scope()             - Set scope attribute
| size()              - Set size attribute
| src()               - Set src attribute
| standby()           - Set standby attribute
| style()             - Set style attribute
| summary()           - Set summary attribute
| tabindex()          - Set tabindex attribute
| target()            - Set target attribute
| title()             - Set title attribute
| type()              - Set type attribute
| valign()            - Set valign attribute
| value()             - Set value attribute
| valuetype()         - Set valuetype attribute
| version()           - Set version attribute
| width()             - Set width attribute
| xmllang()           - Set xml:lang attribute
| xmlns()             - Set xmlns attribute
| xmlnsxsi()          - Set xlmns:xsi attribute
| xmlspace()          - Set xml:space attribute
| xsischemalocation() - Set xsi:schemaLocation attribute
*/


namespace splittlogic\xhtml\Traits;


trait settings
{


  // Set abbr attribute
  public function abbr($abbr = null)
  {
    if ($abbr)
    {
      $this->attribute(['abbr' => $abbr]);
    }
    return $this;
  }


  // Set accept attribute
  public function accept($accept = null)
  {
    if ($accept)
    {
      $this->attribute(['accept' => $accept]);
    }
    return $this;
  }


  // Set accept-charset attribute
  public function acceptcharset($charset = null)
  {
    if ($charset)
    {
      $this->attribute(['accept-charset' => $charset]);
    }
    return $this;
  }


  // Set accesskey attribute
  public function accesskey($key = null)
  {
    if ($key)
    {
      $this->attribute(['accesskey' => $key]);
    }
    return $this;
  }


  // Set action attribute
  public function action($action = null)
  {
    if ($action)
    {
      $this->attribute(['action' => $action]);
    }
    return $this;
  }


  // Set align attribute
  public function align($align = null)
  {
    if ($align)
    {
      $this->attribute(['align' => $align]);
    }
    return $this;
  }


  // Set alt attribute
  public function alt($alt = null)
  {
    if ($alt)
    {
      $this->attribute(['alt' => $alt]);
    }
    return $this;
  }


  // Set archive attribute
  public function archive($archive = null)
  {
    if ($archive)
    {
      $this->attribute(['archive' => $archive]);
    }
    return $this;
  }


  // Set a unique attribute for the element
  // Example:
  // data-dismiss="alert"
  // attribute(['data-dismiss' => 'alert'])
  public function attribute($attribute)
  {
    $this->set('attributes',$attribute,'add');
    return $this;
  }


  // Set axis attribute
  public function axis($axis = null)
  {
    if ($axis)
    {
      $this->attribute(['axis' => $axis]);
    }
    return $this;
  }


  // Set charset attribute
  public function charset($charset = null)
  {
    if ($charset)
    {
      $this->attribute(['charset' => $charset]);
    }
    return $this;
  }


  // Set cite attribute
  public function cite($cite = null)
  {
    if ($cite)
    {
      $this->attribute(['cite' => $cite]);
    }
    return $this;
  }


  // Set class for element
  public function class($class = null)
  {
    // Check if class is null
    if ($class)
    {
      // Add class to classes variable
      $this->set('classes',$class,'add');
    }
    // Return this
    return $this;
  }


  // Set classid attribute
  public function classid($id = null)
  {
    if ($id)
    {
      $this->attribute(['classid' => $id]);
    }
    return $this;
  }


  // Set codebase attribute
  public function codebase($code = null)
  {
    if ($code)
    {
      $this->attribute(['codebase' => $code]);
    }
    return $this;
  }


  // Set codetype attribute
  public function codetype($code = null)
  {
    if ($code)
    {
      $this->attribute(['codetype' => $code]);
    }
    return $this;
  }


  // Set cols attribute
  public function cols($cols = null)
  {
    if ($cols)
    {
      $this->attribute(['cols' => $cols]);
    }
    return $this;
  }


  // Set colspan attribute
  public function colspan($cols = null)
  {
    if ($cols)
    {
      $this->attribute(['colspan' => $cols]);
    }
    return $this;
  }


  // Set config variable
  public function config($config = null)
  {
    $this->set('config',$config);
    return $this;
  }


  // Set content variable for element
  public function content($content = null,$add = null)
  {
    $this->set('content',$this->checkEOL($content),$add);
    return $this;
  }


  // Set data attribute
  public function data($data = null)
  {
    if ($data)
    {
      $this->attribute(['data' => $data]);
    }
    return $this;
  }


  // Set description for page
  public function description($desc = null)
  {
    // Check if description is null
    if ($desc)
    {
      // Set description
      $this->set('description',$desc);
    }
    // Return this
    return $this;
  }


  // Set encoding attribute
  public function encoding($encoding = null)
  {
    if ($encoding)
    {
      $this->attribute(['encoding' => $encoding]);
    }
    return $this;
  }


  // Set enctype attribute
  public function enctype($type = null)
  {
    if ($type)
    {
      $this->attribute(['enctype' => $type]);
    }
    return $this;
  }


  // Toggle eol (End of Line) setting
  public function eol($setting = null)
  {
    if (is_null($setting))
    {
      $this->set('eol',true);
    } else {
      $this->set('eol',$setting);
    }
    return $this;
  }


  // Set headers attribute
  public function headers($headers = null)
  {
    if ($headers)
    {
      $this->attribute(['headers' => $headers]);
    }
    return $this;
  }


  // Set height attribute
  public function height($height = null)
  {
    if ($height)
    {
      $this->attribute(['height' => $height]);
    }
    return $this;
  }


  // Set href attribute
  public function href($href = null)
  {
    if ($href)
    {
      $this->attribute(['href' => $href]);
    }
    return $this;
  }


  // Set hreflang attribute
  public function hreflang($lang = null)
  {
    if ($lang)
    {
      $this->attribute(['hreflang' => $lang]);
    }
    return $this;
  }


  // Set http-equiv attribute
  public function httpequiv($http = null)
  {
    if ($http)
    {
      $this->attribute(['http-equiv' => $http]);
    }
    return $this;
  }


  // Set inputmode attribute
  public function inputmode($mode = null)
  {
    if ($mode)
    {
      $this->attribute(['inputmode' => $mode]);
    }
    return $this;
  }


  // Set keyword for page
  public function keyword($keyword = null)
  {
    // Check if keyword is null
    if ($keyword)
    {
      // Add keyword to keywords variable
      $this->set('keywords',$keyword,'add');
    }
    // Return this
    return $this;
  }


  // Set label attribute
  public function label($label = null)
  {
    if ($label)
    {
      $this->attribute(['label' => $label]);
    }
    return $this;
  }


  // Set longdesc attribute
  public function longdesc($desc = null)
  {
    if ($desc)
    {
      $this->attribute(['longdesc' => $desc]);
    }
    return $this;
  }


  // Set maxlength attribute
  public function maxlength($length = null)
  {
    if ($length)
    {
      $this->attribute(['maxlength' => $length]);
    }
    return $this;
  }


  // Set media attribute
  public function media($media = null)
  {
    if ($media)
    {
      $this->attribute(['media' => $media]);
    }
    return $this;
  }


  // Set method attribute
  public function method($method = null)
  {
    if ($method)
    {
      $this->attribute(['method' => $method]);
    }
    return $this;
  }


  // Set name attribute
  public function name($name = null)
  {
    if ($name)
    {
      $this->attribute(['name' => $name]);
    }
    return $this;
  }


  // Set onblur attribute
  public function onblur($blur = null)
  {
    if ($blur)
    {
      $this->attribute(['onblur' => $blur]);
    }
    return $this;
  }


  // Set onchange attribute
  public function onchange($change = null)
  {
    if ($change)
    {
      $this->attribute(['onchange' => $change]);
    }
    return $this;
  }


  // Set onclick attribute
  public function onclick($event = null)
  {
    if ($event)
    {
      $this->attribute(['onclick' => $event]);
    }
    return $this;
  }


  // Set ondblclick attribute
  public function ondblclick($event = null)
  {
    if ($event)
    {
      $this->attribute(['ondblclick' => $event]);
    }
    return $this;
  }


  // Set onfocus attribute
  public function onfocus($focus = null)
  {
    if ($focus)
    {
      $this->attribute(['onfocus' => $focus]);
    }
    return $this;
  }


  // Set onkeydown attribute
  public function onkeydown($event = null)
  {
    if ($event)
    {
      $this->attribute(['onkeydown' => $event]);
    }
    return $this;
  }


  // Set onkeypress attribute
  public function onkeypress($event = null)
  {
    if ($event)
    {
      $this->attribute(['onkeypress' => $event]);
    }
    return $this;
  }


  // Set onkeyup attribute
  public function onkeyup($event = null)
  {
    if ($event)
    {
      $this->attribute(['onkeyup' => $event]);
    }
    return $this;
  }


  // Set onload attribute
  public function onload($event = null)
  {
    if ($event)
    {
      $this->attribute(['onload' => $event]);
    }
    return $this;
  }


  // Set onmousedown attribute
  public function onmousedown($event = null)
  {
    if ($event)
    {
      $this->attribute(['onmousedown' => $event]);
    }
    return $this;
  }


  // Set onmousemove attribute
  public function onmousemove($event = null)
  {
    if ($event)
    {
      $this->attribute(['onmousemove' => $event]);
    }
    return $this;
  }


  // Set onmouseout attribute
  public function onmouseout($event = null)
  {
    if ($event)
    {
      $this->attribute(['onmouseout' => $event]);
    }
    return $this;
  }


  // Set onmouseover attribute
  public function onmouseover($event = null)
  {
    if ($event)
    {
      $this->attribute(['onmouseover' => $event]);
    }
    return $this;
  }


  // Set onmouseup attribute
  public function onmouseup($event = null)
  {
    if ($event)
    {
      $this->attribute(['onmouseup' => $event]);
    }
    return $this;
  }


  // Set onreset attribute
  public function onreset($event = null)
  {
    if ($event)
    {
      $this->attribute(['onreset' => $event]);
    }
    return $this;
  }


  // Set onselect attribute
  public function onselect($event = null)
  {
    if ($event)
    {
      $this->attribute(['onselect' => $event]);
    }
    return $this;
  }


  // Set onsubmit attribute
  public function onsubmit($event = null)
  {
    if ($event)
    {
      $this->attribute(['onsubmit' => $event]);
    }
    return $this;
  }


  // Set onunload attribute
  public function onunload($event = null)
  {
    if ($event)
    {
      $this->attribute(['onunload' => $event]);
    }
    return $this;
  }


  // Set profile attribute
  public function profile($profile = null)
  {
    if ($profile)
    {
      $this->attribute(['profile' => $profile]);
    }
    return $this;
  }


  // Set rel attribute
  public function rel($rel = null)
  {
    if ($rel)
    {
      $this->attribute(['rel' => $rel]);
    }
    return $this;
  }


  // Set rev attribute
  public function rev($rev = null)
  {
    if ($rev)
    {
      $this->attribute(['rev' => $rev]);
    }
    return $this;
  }


  // Set rows attribute
  public function rows($rows = null)
  {
    if ($rows)
    {
      $this->attribute(['rows' => $rows]);
    }
    return $this;
  }


  // Set rowspan attribute
  public function rowspan($span = null)
  {
    if ($span)
    {
      $this->attribute(['rowspan' => $span]);
    }
    return $this;
  }


  // Set scheme attribute
  public function scheme($scheme = null)
  {
    if ($scheme)
    {
      $this->attribute(['scheme' => $scheme]);
    }
    return $this;
  }


  // Set scope attribute
  public function scope($scope = null)
  {
    if ($scope)
    {
      $this->attribute(['scope' => $scope]);
    }
    return $this;
  }


  // Set size attribute
  public function size($size = null)
  {
    if ($size)
    {
      $this->attribute(['size' => $size]);
    }
    return $this;
  }


  // Set src attribute
  public function src($src = null)
  {
    if ($src)
    {
      $this->attribute(['src' => $src]);
    }
    return $this;
  }


  // Set standby attribute
  public function standby($val = null)
  {
    if ($val)
    {
      $this->attribute(['standby' => $val]);
    }
    return $this;
  }


  // Set style attribute
  public function style($style = null)
  {
    if ($style)
    {
      $this->attribute(['style' => $style]);
    }
    return $this;
  }


  // Set summary attribute
  public function summary($summary = null)
  {
    if ($summary)
    {
      $this->attribute(['summary' => $summary]);
    }
    return $this;
  }


  // Set tabindex attribute
  public function tabindex($index = null)
  {
    if ($index)
    {
      $this->attribute(['tabindex' => $index]);
    }
    return $this;
  }


  // Set target attribute
  public function target($target = null)
  {
    if ($target)
    {
      if ($target == 'blank')
      {
        $target = '_blank';
      }
      $this->attribute(['target' => $target]);
    }
    return $this;
  }


  // Set title attribute
  public function title($title = null)
  {
    if ($title)
    {
      $this->attribute(['title' => $title]);
    }
    return $this;
  }


  // Set type attribute
  public function type($type = null)
  {
    if ($type)
    {
      $this->attribute(['type' => $type]);
    }
    return $this;
  }


  // Set valign attribute
  public function valign($align = null)
  {
    if ($align)
    {
      $this->attribute(['valign' => $align]);
    }
    return $this;
  }


  // Set value attribute
  public function value($value = null)
  {
    if ($value)
    {
      $this->attribute(['value' => $value]);
    }
    return $this;
  }


  // Set valuetype attribute
  public function valuetype($value = null)
  {
    if ($value)
    {
      $this->attribute(['valuetype' => $value]);
    }
    return $this;
  }


  // Set version attribute
  public function version($version = null)
  {
    if ($version)
    {
      $this->attribute(['version' => $version]);
    }
    return $this;
  }


  // Set width attribute
  public function width($width = null)
  {
    if ($width)
    {
      $this->attribute(['width' => $width]);
    }
    return $this;
  }


  // Set xml:lang attribute
  public function xmllang($xml)
  {
    if ($xml)
    {
      $this->attribute(['xml:lang' => $xml]);
    }
    return $this;
  }


  // Set xmlns:xsi attribute
  public function xmlns($xml)
  {
    if ($xml)
    {
      $this->attribute(['xmlns' => $xml]);
    }
    return $this;
  }


  // Set xmlns:xsi attribute
  public function xmlnsxsi($xml)
  {
    if ($xml)
    {
      $this->attribute(['xmlns:xsi' => $xml]);
    }
    return $this;
  }


  // Set xml:space attribute
  public function xmlspace($xml)
  {
    if ($xml)
    {
      $this->attribute(['xml:space' => $xml]);
    }
    return $this;
  }


  // Set xsi:schemaLocation attribute
  public function xsischemalocation($xml)
  {
    if ($xml)
    {
      $this->attribute(['xsi:schemaLocation' => $xml]);
    }
    return $this;
  }


}
