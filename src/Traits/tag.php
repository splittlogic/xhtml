<?php

/*
|--------------------------------------------------------------------------
| tag - XHTML Trait to create generic tag element
|--------------------------------------------------------------------------
|
| Required Traits:
|   check
|   reset
|   set
|   setget
|   settings
|
| tag()     - Create given html tag
| tagline() - Create given html tag line
*/


namespace splittlogic\xhtml\Traits;


trait tag
{


  // Create given html tag
  public function tag($tag, $content = null)
  {
    // Check for config
    $this->checkConfig($tag);

    // Check for content
    $this->checkContent($content);

    // Set element id
    $id = $this->setID();
    if ($id)
    {
      $id = ' id="' . $id . '"';
    }

    // Set element classes
    $classes = $this->setClasses();
    if ($classes)
    {
      $classes = ' class="' . $classes . '"';
    }

    // Set element attributes
    $attributes = $this->setAttributes();

    // Clean content in case it is an array
    $content = $this->get('content');
    $this->content($content);
    $content = null;

    // Build element
    $html = array();
    $html[] = '<' . $tag
            . $id
            . $classes
            . $attributes
            . $this->get('extrafields') . '>';
    $html[] = $this->get('content');
    $html[] = '</' . $tag . '>';

    // Set element html string
    $this->setHtml($html);

    // Reset Variables
    $this->reset($tag);

    // Return object
    return $this;
  }


  // Create given html tag line
  public function tagline($prefix = null,$suffix = null,$content = null)
  {
    // Check for config
    $this->checkConfig($prefix);

    // Verify content is set
    $this->checkContent($content);

    // Add spacing to content
    if (!is_null($this->get('content')))
    {
      $this->set('content',' ' . $this->get('content'));
    }

    // Set element id
    $id = $this->setID();
    if ($id)
    {
      $id = ' id="' . $id . '"';
    }

    // Set element classes
    $classes = $this->setClasses();
    if ($classes)
    {
      $classes = ' class="' . $classes . '"';
    }

    // Set element attributes
    $attributes = $this->setAttributes();

    // Clean content in case it is an array
    $content = $this->get('content');
    $this->content($content);
    $content = null;

    // Build element
    $html = '<' . $prefix
          . $id
          . $classes
          . $attributes
          . $this->get('content')
          . $this->get('extrafields')
          . $suffix . '>';

    // Set element html string
    $this->setHtml($html);

    // Reset Variables
    $this->reset($prefix);

    // Return object
    return $this;
  }


}
