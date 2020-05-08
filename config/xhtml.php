<?php

return [
    // Default config settings
    'default' => [

      'doctype' => [
        'content' => 'html',
      ],

      'meta' => [
        0 => [
          'charset' => 'UTF-8',
        ],
      ],

      'title' => [
        'content' => 'Splittlogic - xhtml',
      ],

    ],

    // About config settings
    'about' => [

      'doctype' => [
        'content' => 'html',
      ],

      'meta' => [
        0 => [
          'charset' => 'UTF-8',
        ],
      ],

      'title' => [
        'content' => 'Splittlogic - xhtml - About',
      ],

    ],

    // Full Config Template
    'full' => [

      'base' => [
        'id' => 'value',
        'href' => 'https://www.w3.org/',
        'target' => 'blank',
        'xmlnsxsi' => 'http://www.w3.org/2001/XMLSchema-instance',
        'xmlns' => 'http://www.w3.org/1999/xhtml',
        'attributes' => [
          'name' => 'value',
        ],
      ],

      'body' => [
        'class' => 'class1 class2 class3',
        'id' => 'value',
        'onclick' => 'onclick()',
        'ondblclick' => 'ondblclick()',
        'onkeydown' => 'onkeydown()',
        'onkeypress' => 'onkeypress()',
        'onkeyup' => 'onkeyup()',
        'onload' => 'onload()',
        'onunload' => 'onunload()',
        'onmousedown' => 'onmousedown()',
        'onmousemove' => 'onmousemove()',
        'onmouseout' => 'onmouseout()',
        'onmouseover' => 'onmouseover()',
        'onmouseup' => 'onmouseup()',
        'style' => 'property:value;',
        'title' => 'body title',
        'xmlnsxsi' => 'http://www.w3.org/2001/XMLSchema-instance',
        'xmllang' => 'en',
        'xmlns' => 'http://www.w3.org/1999/xhtml',
        'xmlspace' => 'preserve',
        'attributes' => [
          'name' => 'value',
        ],
      ],

      'css' => [
        0 => [
          'charset' => 'UTF-8',
          'class' => 'class1 class2 class3',
          'href' => 'cssfile.css',
          'hreflang' => 'en',
          'id' => 'value',
          'media' => 'print',
          'onmouseup' => 'function()',
          'rel' => 'stylesheet',
          'rev' => 'value',
          'style' => 'property:value;',
          'target' => 'blank',
          'title' => 'link title',
          'type' => 'text/css',
          'xmlspace' => 'preserve',
          'attributes' => [
            'name' => 'value',
          ],
        ],
      ],

      'description' => 'Written page description',

      'doctype' => [
        'id' => 'value',
        'content' => 'html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd"',
        'attributes' => [
          'name' => 'value',
        ],
      ],

      'head' => [
        'id' => 'value',
        'profile' => 'http://www.acme.com/profiles/core',
        'xmlnsxsi' => 'http://www.w3.org/2001/XMLSchema-instance',
        'xmllang' => 'en',
        'xmlns' => 'http://www.w3.org/1999/xhtml',
        'attributes' => [
          'name' => 'value',
        ],
      ],

      'html' => [
        'id' => 'value',
        'lang' => 'en',
        'xmlnsxsi' => 'http://www.w3.org/2001/XMLSchema-instance',
        'xmllang' => 'en',
        'xmlns' => 'http://www.w3.org/1999/xhtml',
        'xsischemalocation' => 'https://www.w3schools.com note.xsd',
        'attributes' => [
          'name' => 'value',
        ],
      ],

      'js' => [
        0 => [
          'charset' => 'UTF-8',
          'content' => 'blah',
          'id' => 'value',
          'location' => 'head',
          'src' => 'jsfile.js',
          'type' => 'value',
          'xmlns' => 'http://www.w3.org/1999/xhtml',
          'xmlnsxsi' => 'http://www.w3.org/2001/XMLSchema-instance',
          'attributes' => [
            'name' => 'value',
          ],
        ],
      ],

      'keywords' => 'seo, words, for, page',

      'link' => [
        0 => [
          'charset' => 'UTF-8',
          'class' => 'class1 class2 class3',
          'href' => 'style.css',
          'hreflang' => 'en',
          'id' => 'value',
          'media' => 'print',
          'onmouseup' => 'function()',
          'rel' => 'stylesheet',
          'rev' => 'value',
          'style' => 'property:value;',
          'target' => 'blank',
          'title' => 'link title',
          'type' => 'text/css',
          'xmlspace' => 'preserve',
          'attributes' => [
            'name' => 'value',
          ],
        ],
        1 => [
          'charset' => 'UTF-8',
          'class' => 'class1 class2 class3',
          'href' => 'style.css',
          'hreflang' => 'en',
          'id' => 'value',
          'media' => 'print',
          'onmouseup' => 'function()',
          'rel' => 'stylesheet',
          'rev' => 'value',
          'style' => 'property:value;',
          'target' => 'blank',
          'title' => 'link title',
          'type' => 'text/css',
          'xmlspace' => 'preserve',
          'attributes' => [
            'name' => 'value',
          ],
        ],
      ],

      'meta' => [
        0 => [
          'name' => 'viewport',
          'content' => 'width=device-width, initial-scale=1.0',
        ],
        1 => [
          'name' => 'description',
          'content' => 'Laravel splittlogic/xhtml package',
        ],
        2 => [
          'charset' => 'UTF-8',
          'attributes' => [
            'name' => 'value',
          ],
        ]
      ],

      'object' => [
        0 => [
          'archive' => 'value',
          'class' => 'class1 class2 class3',
          'classid' => 'value',
          'codebase' => 'value',
          'codetype' => 'type',
          'content' => 'stuff in the object tags',
          'data' => 'value',
          'height' => '100',
          'id' => 'value',
          'name' => 'value',
          'onclick' => 'onclick()',
          'ondblclick' => 'ondblclick()',
          'onkeydown' => 'onkeydown()',
          'onkeypress' => 'onkeypress()',
          'onkeyup' => 'onkeyup()',
          'onmousedown' => 'onmousedown()',
          'onmousemove' => 'onmousemove()',
          'onmouseout' => 'onmouseout()',
          'onmouseover' => 'onmouseover()',
          'onmouseup' => 'onmouseup()',
          'standby' => 'value',
          'style' => 'property:value;',
          'tabindex' => 'value',
          'title' => 'object title',
          'type' => 'value',
          'width' => '100',
          'xmlnsxsi' => 'http://www.w3.org/2001/XMLSchema-instance',
          'xmllang' => 'en',
          'xmlns' => 'http://www.w3.org/1999/xhtml',
          'xmlspace' => 'preserve',
          'attributes' => [
            'name' => 'value',
          ],
        ],
        1 => [
          'archive' => 'value',
          'class' => 'class1 class2 class3',
          'classid' => 'value',
          'codebase' => 'value',
          'codetype' => 'type',
          'content' => 'stuff in the object tags',
          'data' => 'value',
          'height' => '100',
          'id' => 'value',
          'name' => 'value',
          'onclick' => 'onclick()',
          'ondblclick' => 'ondblclick()',
          'onkeydown' => 'onkeydown()',
          'onkeypress' => 'onkeypress()',
          'onkeyup' => 'onkeyup()',
          'onmousedown' => 'onmousedown()',
          'onmousemove' => 'onmousemove()',
          'onmouseout' => 'onmouseout()',
          'onmouseover' => 'onmouseover()',
          'onmouseup' => 'onmouseup()',
          'standby' => 'value',
          'style' => 'property:value;',
          'tabindex' => 'value',
          'title' => 'object title',
          'type' => 'value',
          'width' => '100',
          'xmlnsxsi' => 'http://www.w3.org/2001/XMLSchema-instance',
          'xmllang' => 'en',
          'xmlns' => 'http://www.w3.org/1999/xhtml',
          'xmlspace' => 'preserve',
          'attributes' => [
            'name' => 'value',
          ],
        ],
      ],

      'script' => [
        0 => [
          'charset' => 'UTF-8',
          'content' => 'this is a scripting',
          'id' => 'value',
          'location' => 'head',
          'src' => 'file.js',
          'type' => 'value',
          'xmlns' => 'http://www.w3.org/1999/xhtml',
          'xmlnsxsi' => 'http://www.w3.org/2001/XMLSchema-instance',
          'attributes' => [
            'name' => 'value',
          ],
        ],
      ],

      'style' => [
        0 => [
          'content' => 'test {this:that;}',
          'location' => 'footer',
          'attributes' => [
            'name' => 'value',
          ],
        ],
      ],

      'xml' => [
        'version' =>  '1.0',
        'encoding' => 'utf-8',
        'attributes' => [
          'name' => 'value',
        ],
      ],

      'title' => [
        'content' => 'Splittlogic - xhtml',
        'attributes' => [
          'name' => 'value',
        ],
      ],

    ],
];
