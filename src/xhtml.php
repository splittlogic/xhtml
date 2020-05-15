<?php

/*
|--------------------------------------------------------------------------
| xhtml - Laravel XHTML Basic generator class
|--------------------------------------------------------------------------
|
*/

namespace splittlogic\xhtml;

class xhtml
{


  use Traits\blade;
  use Traits\check;
  use Traits\config;
  use Traits\elements;
  use Traits\reset;
  use Traits\returns;
  use Traits\save;
  use Traits\set;
  use Traits\setget;
  use Traits\settings;
  use Traits\tag;


  public static function about()
  {
    $x = new self;

    $x->config('about');

    $x->eol();

    $x->styletag(
'.xhtml-pre-div {
  margin: auto;
  white-space: pre-wrap;       /* css-3 */
  white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
  white-space: -pre-wrap;      /* Opera 4-6 */
  white-space: -o-pre-wrap;    /* Opera 7 */
  word-wrap: break-word;       /* Internet Explorer 5.5+ */
  width: 90%;
}
table, th, td {
  border: 1px solid;
  border-collapse: collapse;
}
table {
  margin: 0 auto;
  padding: 5px;
  width: 90%;
}'
    );

    $content = '';

    $content .= $x->h1('Splittlogic xhtml - '
              . $x->small('Laravel XHTML Basic Package')
              ->html())
              ->html();

    $content .= $x->h4('Table of Contents:')->html();
      $x->li($x->a('Calling xhtml Class','#Class')->html());
      $x->li($x->a('Base Tag Functions','#Tag')->html());
      $x->li($x->a('Return Functions','#Return')->html());
      $x->li($x->a('Elements','#Elements')->html());
      $x->li($x->a('Attributes / Settings','#Attributes')->html());
      $x->li($x->a('Page Options','#PageOptions')->html());
      $x->li($x->a('Config','#Config')->html());
      $x->li($x->a('Blade','#Blade')->html());
      $x->li($x->a('Array To Table','#Arraytotable')->html());
    $content .= $x->ul()->html();

    // Calling xhtml Class
    $content .= $x->h2(
      $x->name('Class')
        ->id('Class')
        ->a('Calling xhtml Class')->html()
    )->html();

      // Table Headers
      $x->th('Instance');
      $x->th('Static');
      $x->tr();

      // Instance
      $x->style('width:75%');
      $x->pre(
'$x = new xhtml;
  $x->settingName(' . "'value'"  . ');
  $x->attributeName('. "'value'" . ');
  $x->elementName();
  $content = $x->html();'
      );
      $x->class('xhtml-pre-div');
      $x->div($x->html());
      $x->style('width:50%;');
      $x->td($x->html());

      // Static
      $x->pre(
'$content = xhtml::x()
  ->settingName(' . "'value'" . ')
  ->attributeName(' . "'value'" . ')
  ->elementName()
  ->html();'
      );
      $x->class('xhtml-pre-div');
      $x->div($x->html());
      $x->style('width:50%;');
      $x->td($x->html());
      $x->tr();
    $content .= $x->table()->html();
    $content .= $x->br()->html();

    // Base Tag Functions
    $content .= $x->h2(
      $x->name('Tag')
        ->id('Tag')
        ->a('Base Tag Functions')
        ->html()
    )->html();

      // Base Tag Functions
      $x->th('Function');
      $x->th('Description');
      $x->th('Example');
      $x->th('Output');
      $x->tr();

      // Tag
      $el = 'tag($tag,$content)';
      $desc = 'Create given html tag';
      $ex = '$x->tag(' . "'div','Content of div'" . ');';
      $out = $x->tag('div','Content of div')->html();
      $x->elrow($el,$desc,$ex,$out);

      // Tagline
      $el = 'tagline($prefix,$suffix,$content)';
      $desc = 'Create given html tagline';
      $ex = '$x->tagline(' . "'img',''" . ');';
      $out = $x->tagline('img','')->html();
      $x->elrow($el,$desc,$ex,$out);

    $content .= $x->table()->html();
    $content .= $x->br()->html();

    // Return Functions
    $content .= $x->h2(
      $x->name('Return')
        ->id('Return')
        ->a('Return Functions')
        ->html()
      )->html();

      // Return Functions Headers
      $x->th('Function');
      $x->th('Description');
      $x->th('Use');
      $x->tr();

      // element link
      $x->style('text-align:center');
      $x->td('elementlink()');
      $x->td($x->centercell('Returns element link for given element.  If id is not passed, the last called element will be returned.'));
      $x->td($x->centercell(
        $x->pre(
          '$x->elementlink(' . "'Text to be linked','id of element'" . ');'
        )->html())
      );
      $x->tr();

      // html
      $x->style('text-align:center');
      $x->td('html()');
      $x->td($x->centercell('Returns the html of last called element'));
      $x->td($x->centercell($x->pre('$x->html();')->html()));
      $x->tr();

      // id
      $x->style('text-align:center');
      $x->td('id()');
      $x->td($x->centercell('Set id of element to be called or it will return last called element id'));
      $x->td(
        $x->centercell(
          $x->pre(
            '$x->id();'
            . ' - Return element id.'
            . $x->br()->html()
            . '$x->id(' . "'UniqueID'" . ')'
            . ' - Set UniqueID for element to be called.'
          )->html()
        )
      );
      $x->tr();

    $content .= $x->table()->html();
    $content .= $x->br()->html();

    // Elements
    $content .= $x->h2(
      $x->name('Elements')
        ->id('Elements')
        ->a('Elements')
        ->html()
    )->html();

      // Table to display - needs to be declared before starting the elements table
      $x->th('Heading 1');
      $x->th('Heading 2');
      $x->th('Heading 3');
      $x->tr();
      $x->td('Table Cell 1');
      $x->td('Table Cell 2');
      $x->td('Table Cell 3');
      $x->tr();
      $x->td('Table Cell 4');
      $x->td('Table Cell 5');
      $x->td('Table Cell 6');
      $x->tr();
      $x->td('Table Cell 7');
      $x->td('Table Cell 8');
      $x->td('Table Cell 9');
      $x->tr();
      $table = $x->table()->html();

      // Table cells to display - needs to be declared before starting the elements table
      $td = $x->td('table cell content')->html();
      $th = $x->th('table header content')->html();
        // Call tr to clear tds and ths
        $x->tr();

      // Table rows to display - needs to be declared before starting the elements table
      $x->td('Cell 1');
      $x->td('Cell 2');
      $x->td('Cell 3');
      $tr = $x->tr()->html();
        // Call table to clear trs
        $x->table();

      // Table Headers
      $x->th('Element');
      $x->th('Description');
      $x->th('Example');
      $x->th('Output');
      $x->tr();

      // Anchor element
      $el = 'a';
      $desc = 'Anchor (hyperlink)';
      $ex = '$x->a(' . "'http://w3.org','Click Here for W3'" . ');';
      $out = $x->a('http://w3.org','Click Here for W3')->html();
      $x->elrow($el,$desc,$ex,$out);

      // Abbreviation element
      $el = 'abbr';
      $desc = 'Abbreviation';
      $ex = '$x->abbrtag(' . "'Text to abbreviate'," . "'TTA'" . ');';
      $out = $x->abbrtag('Text to abbreviate','TTA')->html();
      $x->elrow($el,$desc,$ex,$out);

      // Acronym element
      $el = 'acronym';
      $desc = 'Acronym';
      $ex = '$x->acronym(' . "'Text to abbreviate'," . "'TTA'" . ');';
      $out = $x->acronym('Text to abbreviate','TTA')->html();
      $x->elrow($el,$desc,$ex,$out);

      // Address element
      $el = 'address';
      $desc = 'Address';
      $ex = '$x->address(' . "'1234 Lane Drive'" . ');';
      $out = $x->address('1234 Lane Drive')->html();
      $x->elrow($el,$desc,$ex,$out);

      // b element
      $el = 'b';
      $desc = 'Bold';
      $ex = '$x->b(' . "'Text to be bold'" . ');';
      $out = $x->b('Text to be bold')->html();
      $x->elrow($el,$desc,$ex,$out);

      // base element
      $el = 'base';
      $desc = 'Base - This element will automatically be added when the head element is called.';
      $ex = '$x->href(' . "'" . url()->current() . "'" . ');
$x->base();';
      $x->href(url()->current());
      $out = $x->base()->html();
      $x->elrow($el,$desc,$ex,$out);

      // big element
      $el = 'big';
      $desc = 'Big';
      $ex = '$x->big(' . "'Text to be big'" . ');';
      $out = $x->big('Text to be big')->html();
      $x->elrow($el,$desc,$ex,$out);

      // blockquote element
      $el = 'blockquote';
      $desc = 'Blockquote';
      $ex = '$x->blockquote(' . "'Text to be quoted'" . ');';
      $out = $x->blockquote('Text to be quoted')->html();
      $x->elrow($el,$desc,$ex,$out);

      // body close tag
      $el = 'body';
      $desc = 'Body close tag';
      $ex = '$x->bodyclose();';
      $out = $x->bodyclose()->html();
      $x->elrow($el,$desc,$ex,$out);

      // body open tag
      $el = 'body';
      $desc = 'Body open tag';
      $ex = '$x->bodyopen();';
      $out = $x->bodyopen()->html();
      $x->elrow($el,$desc,$ex,$out);

      // br element
      $el = 'br';
      $desc = 'Line Break';
      $ex = '$x->br();';
      $out = $x->br()->html();
      $x->elrow($el,$desc,$ex,$out);

      // button element
      $el = 'button';
      $desc = 'Button';
      $ex = '$x->button(' . "'Click Here'" . ');';
      $out = $x->button('Click Here')->html();
      $x->elrow($el,$desc,$ex,$out);

      // caption element
      $el = 'caption';
      $desc = 'Caption';
      $ex = '$x->caption(' . "'Text to caption'" . ');';
      $out = $x->caption('Text to caption')->html();
      $x->elrow($el,$desc,$ex,$out);

      // cite element
      $el = 'cite';
      $desc = 'Citation';
      $ex = '$x->citetag(' . "'Text to cite'" . ');';
      $out = $x->citetag('Text to cite')->html();
      $x->elrow($el,$desc,$ex,$out);

      // code element
      $el = 'code';
      $desc = 'Code';
      $ex = '$x->code(' . "'Text to code'" . ');';
      $out = $x->code('Text to code')->html();
      $x->elrow($el,$desc,$ex,$out);

      // CSS element
      $el = 'css';
      $desc = 'CSS link element - This element will automatically be added when the head element is called.';
      $ex = '$x->css(' . "'https://link/to/css/style.css'" . ');';
      $out = $x->css('https://link/to/css/style.css')->html();
      $x->elrow($el,$desc,$ex,$out);

      // dd element
      $el = 'dd';
      $desc = 'Description detail - This element will automatically be added when the dl element is called.';
      $ex = '$x->dd(' . "'Text of descriptive detail'" . ');';
      $out = $x->dd('Text of descriptive detail')->html();
      $x->elrow($el,$desc,$ex,$out);

      // del element
      $el = 'del';
      $desc = 'Deleted text';
      $ex = '$x->del(' . "'Text to be treated as deleted text'" . ');';
      $out = $x->del('Text to be treated as deleted text')->html();
      $x->elrow($el,$desc,$ex,$out);

      // dfn element
      $el = 'dfn';
      $desc = 'Definition';
      $ex = '$x->dfn(' . "'Text of definition / explanation'" . ');';
      $out = $x->dfn('Text of definition / explanation')->html();
      $x->elrow($el,$desc,$ex,$out);

      // div element
      $el = 'div';
      $desc = 'Content division';
      $ex = '$x->div(' . "'Content of div'" . ');';
      $out = $x->div('Content of div')->html();
      $x->elrow($el,$desc,$ex,$out);

      // dl element
      $el = 'dl';
      $desc = 'Description List - Content can be sent to the function or previously called dd & dt will automatically be added.';
      $ex = '$x->dt(' . "'Description Title'" . ');
$x->dd(' . "'Description detail 1'" . ');
$x->dd(' . "'Description detail 2'" . ');
$x->dd(' . "'Description detail 3'" . ');
$x->dl();';
      $x->dt('Description Title');
      $x->dd('Description detail 1');
      $x->dd('Description detail 2');
      $x->dd('Description detail 3');
      $out = $x->dl()->html();
      $x->elrow($el,$desc,$ex,$out);

      // doctype element
      $el = 'doctype';
      $desc = 'Doctype declaration';
      $ex = '$x->doctype(' . "'html'" . ');';
      $out = $x->doctype('html')->html();
      $x->elrow($el,$desc,$ex,$out);

      // dt element
      $el = 'dt';
      $desc = 'Description title - This element will automatically be added when the dl element is called.';
      $ex = '$x->dt(' . "'Text of descriptive title'" . ');';
      $out = $x->dt('Text of descriptive title')->html();
      $x->elrow($el,$desc,$ex,$out);

      // emphasize element
      $el = 'em';
      $desc = 'Emphasize';
      $ex = '$x->em(' . "'Text to be emphasized'" . ');';
      $out = $x->em('Text to be emphasized')->html();
      $x->elrow($el,$desc,$ex,$out);

      // fieldset element
      $el = 'fieldset';
      $desc = 'Fieldset';
      $ex = '$x->fieldset(' . "'html of form elements'" . ');';
      $out = $x->fieldset('html of form elements')->html();
      $x->elrow($el,$desc,$ex,$out);

      // form element
      $el = 'form';
      $desc = 'Form';
      $ex = '$x->form(' . "'html of form elements'" . ');';
      $out = $x->form('html of form elements')->html();
      $x->elrow($el,$desc,$ex,$out);

      // h1 element
      $el = 'h1';
      $desc = 'Heading 1';
      $ex = '$x->h1(' . "'Text of heading 1'" . ');';
      $out = $x->h1('Text of heading 1')->html();
      $x->elrow($el,$desc,$ex,$out);

      // h2 element
      $el = 'h2';
      $desc = 'Heading 2';
      $ex = '$x->h2(' . "'Text of heading 2'" . ');';
      $out = $x->h2('Text of heading 2')->html();
      $x->elrow($el,$desc,$ex,$out);

      // h3 element
      $el = 'h3';
      $desc = 'Heading 3';
      $ex = '$x->h3(' . "'Text of heading 3'" . ');';
      $out = $x->h3('Text of heading 3')->html();
      $x->elrow($el,$desc,$ex,$out);

      // h4 element
      $el = 'h4';
      $desc = 'Heading 4';
      $ex = '$x->h4(' . "'Text of heading 4'" . ');';
      $out = $x->h4('Text of heading 4')->html();
      $x->elrow($el,$desc,$ex,$out);

      // h5 element
      $el = 'h5';
      $desc = 'Heading 5';
      $ex = '$x->h5(' . "'Text of heading 5'" . ');';
      $out = $x->h5('Text of heading 5')->html();
      $x->elrow($el,$desc,$ex,$out);

      // h6 element
      $el = 'h6';
      $desc = 'Heading 6';
      $ex = '$x->h6(' . "'Text of heading 6'" . ');';
      $out = $x->h6('Text of heading 6')->html();
      $x->elrow($el,$desc,$ex,$out);

      // head element
      $el = 'head';
      $desc = 'Head - all head elements created before the head function is called and settings in the config file will automatically be added.';
      $ex = '$x->head();';
      $out = $x->head()->html();
      $x->elrow($el,$desc,$ex,$out);

      // hr element
      $el = 'hr';
      $desc = 'Horizontal Rule';
      $ex = '$x->hr();';
      $out = $x->hr()->html();
      $x->elrow($el,$desc,$ex,$out);

      // html close element
      $el = 'html';
      $desc = 'HTML close tag';
      $ex = '$x->htmlclose();';
      $out = $x->htmlclose()->html();
      $x->elrow($el,$desc,$ex,$out);

      // html open element
      $el = 'html';
      $desc = 'HTML open tag';
      $ex = '$x->htmlopen();';
      $out = $x->htmlopen()->html();
      $x->elrow($el,$desc,$ex,$out);

      // i element
      $el = 'i';
      $desc = 'Italics';
      $ex = '$x->i(' . "'Text to italicize'" . ');';
      $out = $x->i('Text to italicize')->html();
      $x->elrow($el,$desc,$ex,$out);

      // img element
      $el = 'img';
      $desc = 'Image - If the image is not found, the system will automatically scan the image directory for the file.';
      $ex = '$x->img(' . "'imageFileName.jpg'" . ');';
      $out = $x->img('imageFileName.jpg')->html();
      $x->elrow($el,$desc,$ex,$out);

      // input element
      $el = 'input';
      $desc = 'Form input';
      $ex = '$x->name(' . "'inputName'" . ');
$x->id(' . "'inputID'" . ');
$x->input();';
      $x->name('inputName');
      $x->id('inputID');
      $out = $x->input()->html();
      $x->elrow($el,$desc,$ex,$out);

      // ins element
      $el = 'ins';
      $desc = 'Insert (addition)';
      $ex = '$x->ins(' . "'Text treated as an addition'" . ');';
      $out = $x->ins('Text treated as an addition')->html();
      $x->elrow($el,$desc,$ex,$out);

      // js element
      $el = 'JS';
      $desc = 'JS script element - This element will automatically be added when the footer element is called.';
      $ex = '$x->js(' . "'https://link/to/js/file.js'" . ');';
      $out = $x->js('https://link/to/js/file.js')->html();
      $x->elrow($el,$desc,$ex,$out);

      // kbd element
      $el = 'kbd';
      $desc = 'Keyboard input';
      $ex = '$x->kbd(' . "'Text of keyboard input'" . ');';
      $out = $x->kbd('Text of keyboard input')->html();
      $x->elrow($el,$desc,$ex,$out);

      // label element
      $el = 'label';
      $desc = 'Label';
      $ex = '$x->labeltag(' . "'Text of label'" . ');';
      $out = $x->labeltag('Text of label')->html();
      $x->elrow($el,$desc,$ex,$out);

      // legend element
      $el = 'legend';
      $desc = 'Legend';
      $ex = '$x->legend(' . "'Text of legend'" . ');';
      $out = $x->legend('Text of legend')->html();
      $x->elrow($el,$desc,$ex,$out);

      // li element
      $el = 'li';
      $desc = 'List item - This element will automatically be added when the ol or ul element is called.';
      $ex = '$x->li(' . "'Text of list item'" . ');';
      $out = $x->li('Text of list item')->html();
      $x->elrow($el,$desc,$ex,$out);

      // link element
      $el = 'link';
      $desc = 'Link - This element will automatically be added when the head element is called.';
      $ex = '$x->href(' . "'https://link/to/css/file.css'" . ');
$x->link();';
      $x->href('https://link/to/css/file.css');
      $out = $x->link()->html();
      $x->elrow($el,$desc,$ex,$out);

      // mark element
      $el = 'mark';
      $desc = 'Mark (highlight)';
      $ex = '$x->mark(' . "'Text to mark (highlight)'" . ');';
      $out = $x->mark('Text to mark (highlight)')->html();
      $x->elrow($el,$desc,$ex,$out);

      // meta element
      $el = 'meta';
      $desc = 'Meta - This element will automatically be added when the head element is called.';
      $ex = '$x->name(' . "'viewport'" . ');
$x->content(' . "'width=device-width, initial-scale=1.0'" . ');
$x->meta();';
      $x->name('viewport');
      $x->content('width=device-width, initial-scale=1.0');
      $out = $x->meta()->html();
      $x->elrow($el,$desc,$ex,$out);

      // noscript element
      $el = 'noscript';
      $desc = 'noscript';
      $ex = '$x->noscript(' . "'Message of noscript'" . ');';
      $out = $x->noscript('Message of noscript')->html();
      $x->elrow($el,$desc,$ex,$out);

      // object element
      $el = 'object';
      $desc = 'Object - This element will automatically be added when the head element is called if the pagelocation is set to head.';
      $ex = '$x->data(' . "'object.html'" . ');
$x->width(' . "'500'" . ');
$x->height(' . "'200'" . ');
$x->object();';
      $x->data('object.html');
      $x->width('500');
      $x->height('200');
      $out = $x->object()->html();
      $x->elrow($el,$desc,$ex,$out);

      // ol element
      $el = 'ol';
      $desc = 'Ordered List - Content can be sent to the function or previously called li will automatically be added.';
      $ex = '$x->li(' . "'List item 1'" . ');
$x->li(' . "'List item 2'" . ');
$x->li(' . "'List item 3'" . ');
$x->ol();';
      $x->li('List item 1');
      $x->li('List item 2');
      $x->li('List item 3');
      $out = $x->ol()->html();
      $x->elrow($el,$desc,$ex,$out);

      // optgroup element
      $el = 'optgroup';
      $desc = 'Option Group - Content can be sent to the function or previously called options will automatically be added.';
      $ex = '$x->option(' . "'Option 1'" . ');
$x->option(' . "'Option 2'" . ');
$x->option(' . "'Option 3'" . ');
$x->optgroup();';
      $x->option('Option 1');
      $x->option('Option 2');
      $x->option('Option 3');
      $out = $x->optgroup()->html();
      $x->elrow($el,$desc,$ex,$out);

      // option element
      $el = 'option';
      $desc = 'Option';
      $ex = '$x->option(' . "'Text of option'" . ');';
      $out = $x->option('Text of option')->html();
      $x->elrow($el,$desc,$ex,$out);

      // p element
      $el = 'p';
      $desc = 'Paragraph';
      $ex = '$x->p(' . "'Text of paragraph'" . ');';
      $out = $x->p('Text of paragraph')->html();
      $x->elrow($el,$desc,$ex,$out);

      // param element
      $el = 'param';
      $desc = 'Parameter';
      $ex = '$x->name(' . "'ParameterName'" . ');
$x->value(' . "'true'" . ');
$x->param();';
      $x->name('ParameterName');
      $x->value('true');
      $out = $x->param()->html();
      $x->elrow($el,$desc,$ex,$out);

      // pre element
      $el = 'pre';
      $desc = 'Preformatted';
      $ex = '$x->pre(' . "'Preformatted text'" . ');';
      $out = $x->pre('Preformatted text')->html();
      $x->elrow($el,$desc,$ex,$out);

      // q element
      $el = 'q';
      $desc = 'Quote';
      $ex = '$x->q(' . "'Text to quote'" . ');';
      $out = $x->q('Text to quote')->html();
      $x->elrow($el,$desc,$ex,$out);

      // s element
      $el = 's';
      $desc = 's (strikethrough)';
      $ex = '$x->s(' . "'Text to strikethrough'" . ');';
      $out = $x->s('Text to strikethrough')->html();
      $x->elrow($el,$desc,$ex,$out);

      // samp element
      $el = 'samp';
      $desc = 'Sample';
      $ex = '$x->samp(' . "'Sample text'" . ');';
      $out = $x->samp('Sample text')->html();
      $x->elrow($el,$desc,$ex,$out);

      // script element
      $el = 'script';
      $desc = 'Script - This element will automatically be added when the footer element is called, unless page location is set for head';
      $ex = '$x->script(' . "'Javascript content'" . ');';
      $out = $x->script()->html('Javascript content');
      $x->elrow($el,$desc,$ex,$out);

      // select element
      $el = 'select';
      $desc = 'Select - Content can be sent to the function or previously called options will automatically be added.';
      $ex = '$x->option(' . "'Option 1'" . ');
$x->option(' . "'Option 2'" . ');
$x->option(' . "'Option 3'" . ');
$x->select();';
      $x->option('Option 1');
      $x->option('Option 2');
      $x->option('Option 3');
      $out = $x->select()->html();
      $x->elrow($el,$desc,$ex,$out);

      // small element
      $el = 'small';
      $desc = 'Small';
      $ex = '$x->small(' . "'Small text'" . ');';
      $out = $x->small('Small text')->html();
      $x->elrow($el,$desc,$ex,$out);

      // span element
      $el = 'span';
      $desc = 'Span';
      $ex = '$x->span(' . "'Span text'" . ');';
      $out = $x->span('Span text')->html();
      $x->elrow($el,$desc,$ex,$out);

      // strong element
      $el = 'strong';
      $desc = 'Strong';
      $ex = '$x->strong(' . "'Strong text'" . ');';
      $out = $x->strong('Strong text')->html();
      $x->elrow($el,$desc,$ex,$out);

      // style element
      $el = 'style';
      $desc = 'Style - This element will automatically be added when the head element is called.';
      $ex = '$x->styletag(' . "'CSS content'" . ');';
      $out = $x->styletag('CSS content')->html();
      $x->elrow($el,$desc,$ex,$out);

      // sub element
      $el = 'sub';
      $desc = 'Subscript';
      $ex = '$x->sub(' . "'Subscript text'" . ');';
      $out = $x->sub('Subscript text')->html();
      $x->elrow($el,$desc,$ex,$out);

      // sup element
      $el = 'sup';
      $desc = 'Super Script';
      $ex = '$x->sup(' . "'Super script text'" . ');';
      $out = $x->sup('Super script text')->html();
      $x->elrow($el,$desc,$ex,$out);

      // table element
      $el = 'table';
      $desc = 'Table - Content can be sent to the function or previously called tr (table rows) will automatically be added.  If a header is set then the thead and tbody tag will be wrapped.';
      $ex = '$x->th(' . "'Heading 1'" . ');
$x->th(' . "'Heading 2'" . ');
$x->th(' . "'Heading 3'" . ');
$x->tr();
$x->td(' . "'Table Cell 1'" . ');
$x->td(' . "'Table Cell 2'" . ');
$x->td(' . "'Table Cell 3'" . ');
$x->tr();
$x->td(' . "'Table Cell 4'" . ');
$x->td(' . "'Table Cell 5'" . ');
$x->td(' . "'Table Cell 6'" . ');
$x->tr();
$x->td(' . "'Table Cell 7'" . ');
$x->td(' . "'Table Cell 8'" . ');
$x->td(' . "'Table Cell 9'" . ');
$x->tr();
$x->table();';
      $out = $table;
      $x->elrow($el,$desc,$ex,$out);

      // tbody element
      $el = 'tbody';
      $desc = 'Table body';
      $ex = '$x->tbody(' . "'table rows'" . ');';
      $out = $x->tbody('table rows')->html();
      $x->elrow($el,$desc,$ex,$out);

      // td element
      $el = 'td';
      $desc = 'Standard table cells - This element will automatically be added when the tr (table row) element is called.';
      $ex = '$x->td(' . "'table cell content'" . ');';
      $out = $td;
      $x->elrow($el,$desc,$ex,$out);

      // textarea element
      $el = 'textarea';
      $desc = 'Textarea';
      $ex = '$x->textarea(' . "'Content of textarea'" . ');';
      $out = $x->textarea('Content of textarea')->html();
      $x->elrow($el,$desc,$ex,$out);

      // th element
      $el = 'th';
      $desc = 'Header table cells - This element will automatically be added when the tr (table row) element is called.';
      $ex = '$x->th(' . "'table header content'" . ');';
      $out = $th;
      $x->elrow($el,$desc,$ex,$out);

      // thead element
      $el = 'thead';
      $desc = 'Table Header';
      $ex = '$x->thead(' . "'table header rows'" . ');';
      $out = $x->thead('table header rows')->html();
      $x->elrow($el,$desc,$ex,$out);

      // title element
      $el = 'title';
      $desc = 'Page title - This element will automatically be added when the head element is called.';
      $ex = '$x->pagetitle(' . "'Text of page title'" . ');';
      $out = $x->pagetitle('Text of page title')->html();
      $x->elrow($el,$desc,$ex,$out);

      // tr element
      $el = 'tr';
      $desc = 'Table row - Content can be sent to the function or previously called td (table cell) or th (table head cell) will automatically be added.';
      $ex = '$x->td(' . "'Cell 1'" . ');
$x->td(' . "'Cell 2'" . ');
$x->td(' . "'Cell 3'" . ');
$x->tr();';
      $out = $tr;
      $x->elrow($el,$desc,$ex,$out);

      // tt element
      $el = 'tt';
      $desc = 'Teletype text';
      $ex = '$x->tt(' . "'Teletype text content'" . ');';
      $out = $x->tt('Teletype text content')->html();
      $x->elrow($el,$desc,$ex,$out);

      // u element
      $el = 'u';
      $desc = 'u (underline)';
      $ex = '$x->u(' . "'Text to underline'" . ');';
      $out = $x->u('Text to underline')->html();
      $x->elrow($el,$desc,$ex,$out);

      // ul element
      $el = 'ul';
      $desc = 'Unordered List - Content can be sent to the function or previously called li will automatically be added.';
      $ex = '$x->li(' . "'List item 1'" . ');
$x->li(' . "'List item 2'" . ');
$x->li(' . "'List item 3'" . ');
$x->ul();';
      $x->li('List item 1');
      $x->li('List item 2');
      $x->li('List item 3');
      $out = $x->ul()->html();
      $x->elrow($el,$desc,$ex,$out);

      // var element
      $el = 'var';
      $desc = 'Variable';
      $ex = '$x->var(' . "'Variable content'" . ');';
      $out = $x->var('Variable content')->html();
      $x->elrow($el,$desc,$ex,$out);

      // xml element
      $el = 'xml';
      $desc = 'XML';
      $ex = '$x->encoding(' . "'utf-8'" . ');
$x->xml();';
      $x->encoding('utf-8');
      $out = $x->xml()->html();
      $x->elrow($el,$desc,$ex,$out);

      $content .= $x->table()->html();
      $content .= $x->br()->html();

    // Attributes / Settings
    $content .= $x->h2(
      $x->name('Attributes')
        ->id('Attributes')
        ->a('Attributes / Settings')
        ->html()
    )->html();

      // Attributes / Settings Headers
      $x->th('Function');
      $x->th('Description');
      $x->th('Example');
      $x->th('Attribute Added to Element');
      $x->tr();

      // abbr attribute
      $el = 'abbr()';
      $desc = 'Abbreviation';
      $ex = '$x->abbr(' . "'XYZ'" . ');';
      $out = 'abbr="XYZ"';
      $x->elrow($el,$desc,$ex,$out);

      // accept attribute
      $el = 'accept()';
      $desc = 'Accept';
      $ex = '$x->accept(' . "'image/*'" . ');';
      $out = 'accept="image/*"';
      $x->elrow($el,$desc,$ex,$out);

      // acceptcharset attribute
      $el = 'acceptcharset()';
      $desc = 'Acceptable charset';
      $ex = '$x->acceptcharset(' . "'ISO-8859-1'" . ');';
      $out = 'accept-charset="ISO-8859-1"';
      $x->elrow($el,$desc,$ex,$out);

      // accesskey attribute
      $el = 'accesskey()';
      $desc = 'Access key';
      $ex = '$x->accesskey(' . "'h'" . ');';
      $out = 'accesskey="h"';
      $x->elrow($el,$desc,$ex,$out);

      // action attribute
      $el = 'action()';
      $desc = 'Action';
      $ex = '$x->action(' . "'submit.html'" . ');';
      $out = 'action="submit.html"';
      $x->elrow($el,$desc,$ex,$out);

      // align attribute
      $el = 'align()';
      $desc = 'Alignment';
      $ex = '$x->align(' . "'center'" . ');';
      $out = 'align="center"';
      $x->elrow($el,$desc,$ex,$out);

      // alt attribute
      $el = 'alt()';
      $desc = 'Alternative information';
      $ex = '$x->alt(' . "'Alternative text'" . ');';
      $out = 'alt="Alternative text"';
      $x->elrow($el,$desc,$ex,$out);

      // archive attribute
      $el = 'archive()';
      $desc = 'Archive';
      $ex = '$x->archive(' . "'Archive value'" . ');';
      $out = 'archive="Archive value"';
      $x->elrow($el,$desc,$ex,$out);

      // generic attribute
      $el = 'attribute()';
      $desc = 'Generic attribute - Add any attribute name and setting to any element';
      $ex = '$x->attribute([' . "'test' => 'value'" . ']);';
      $out = 'test="value"';
      $x->elrow($el,$desc,$ex,$out);

      // axis attribute
      $el = 'axis()';
      $desc = 'Axis';
      $ex = '$x->axis(' . "'value'" . ');';
      $out = 'axis="value"';
      $x->elrow($el,$desc,$ex,$out);

      // charset attribute
      $el = 'charset()';
      $desc = 'Charset';
      $ex = '$x->charset(' . "'utf-8'" . ');';
      $out = 'charset="utf-8"';
      $x->elrow($el,$desc,$ex,$out);

      // cite attribute
      $el = 'cite()';
      $desc = 'Citation';
      $ex = '$x->cite(' . "'https://link/to/citation'" . ');';
      $out = 'cite="https://link/to/citation"';
      $x->elrow($el,$desc,$ex,$out);

      // class attribute
      $el = 'class()';
      $desc = 'CSS class - Can be called multiple times and will add it to element called after.';
      $ex = '$x->class(' . "'className'" . ');';
      $out = 'class="className"';
      $x->elrow($el,$desc,$ex,$out);

      // classid attribute
      $el = 'classid()';
      $desc = 'Class id';
      $ex = '$x->classid(' . "'value'" . ');';
      $out = 'classid="value"';
      $x->elrow($el,$desc,$ex,$out);

      // codebase attribute
      $el = 'codebase()';
      $desc = 'Codebase';
      $ex = '$x->codebase(' . "'value'" . ');';
      $out = 'codebase="value"';
      $x->elrow($el,$desc,$ex,$out);

      // codetype attribute
      $el = 'codetype()';
      $desc = 'Codetype';
      $ex = '$x->codetype(' . "'value'" . ');';
      $out = 'codetype="value"';
      $x->elrow($el,$desc,$ex,$out);

      // cols attribute
      $el = 'cols()';
      $desc = 'Columns';
      $ex = '$x->cols(' . "'50'" . ');';
      $out = 'cols="50"';
      $x->elrow($el,$desc,$ex,$out);

      // colspan attribute
      $el = 'colspan()';
      $desc = 'Column span';
      $ex = '$x->colspan(' . "'2'" . ');';
      $out = 'cols="2"';
      $x->elrow($el,$desc,$ex,$out);

      // config setting
      $el = 'config()';
      $desc = 'Config to use for various elements being called by the page';
      $ex = '$x->config(' . "'Name'" . ');';
      $out = '';
      $x->elrow($el,$desc,$ex,$out);

      // content setting
      $el = 'content()';
      $desc = 'Set content for element to be called';
      $ex = '$x->content(' . "'Content for element'" . ');';
      $out = '';
      $x->elrow($el,$desc,$ex,$out);

      // data attribute
      $el = 'data()';
      $desc = 'Data';
      $ex = '$x->data(' . "'value'" . ');';
      $out = 'data="value"';
      $x->elrow($el,$desc,$ex,$out);

      // encoding attribute
      $el = 'encoding()';
      $desc = 'Encoding';
      $ex = '$x->encoding(' . "'utf-8'" . ');';
      $out = 'encoding="utf-8"';
      $x->elrow($el,$desc,$ex,$out);

      // enctype attribute
      $el = 'enctype()';
      $desc = 'Encoding type';
      $ex = '$x->enctype(' . "'multipart/form-data'" . ');';
      $out = 'enctype="multipart/form-data"';
      $x->elrow($el,$desc,$ex,$out);

      // eol setting
      $el = 'eol()';
      $desc = 'End of Line setting - set to enable spacing on html code (good for troubleshooting)';
      $ex = '$x->eol();';
      $out = '';
      $x->elrow($el,$desc,$ex,$out);

      // headers attribute
      $el = 'headers()';
      $desc = 'Headers';
      $ex = '$x->headers(' . "'name'" . ');';
      $out = 'headers="name"';
      $x->elrow($el,$desc,$ex,$out);

      // height attribute
      $el = 'height()';
      $desc = 'Height';
      $ex = '$x->height(' . "'50'" . ');';
      $out = 'height="50"';
      $x->elrow($el,$desc,$ex,$out);

      // href attribute
      $el = 'href()';
      $desc = 'href URL';
      $ex = '$x->href(' . "'https://href/link/url'" . ');';
      $out = 'href="https://href/link/url"';
      $x->elrow($el,$desc,$ex,$out);

      // hreflang attribute
      $el = 'hreflang()';
      $desc = 'href Language';
      $ex = '$x->hreflang(' . "'en'" . ');';
      $out = 'hreflang="en"';
      $x->elrow($el,$desc,$ex,$out);

      // http-equiv attribute
      $el = 'httpequiv()';
      $desc = 'HTTP equiv response';
      $ex = '$x->httpequiv(' . "'refresh'" . ');';
      $out = 'http-equiv="refresh"';
      $x->elrow($el,$desc,$ex,$out);

      // inputmode attribute
      $el = 'inputmode()';
      $desc = 'Input Mode';
      $ex = '$x->inputmode(' . "'value'" . ');';
      $out = 'inputmode="value"';
      $x->elrow($el,$desc,$ex,$out);

      // label attribute
      $el = 'label()';
      $desc = 'Label';
      $ex = '$x->label(' . "'Name'" . ');';
      $out = 'label="Name"';
      $x->elrow($el,$desc,$ex,$out);

      // longdesc attribute
      $el = 'longdesc()';
      $desc = 'Long description';
      $ex = '$x->longdesc(' . "'Long description value'" . ');';
      $out = 'longdesc="Long description value"';
      $x->elrow($el,$desc,$ex,$out);

      // maxlength attribute
      $el = 'maxlength()';
      $desc = 'Maximum length';
      $ex = '$x->maxlength(' . "'15'" . ');';
      $out = 'maxlength="15"';
      $x->elrow($el,$desc,$ex,$out);

      // media attribute
      $el = 'media()';
      $desc = 'Media';
      $ex = '$x->media(' . "'print'" . ');';
      $out = 'media="print"';
      $x->elrow($el,$desc,$ex,$out);

      // method attribute
      $el = 'method()';
      $desc = 'Method';
      $ex = '$x->method(' . "'get'" . ');';
      $out = 'method="get"';
      $x->elrow($el,$desc,$ex,$out);

      // name attribute
      $el = 'name()';
      $desc = 'Name';
      $ex = '$x->name(' . "'ElementName'" . ');';
      $out = 'name="ElementName"';
      $x->elrow($el,$desc,$ex,$out);

      // onblur attribute
      $el = 'onblur()';
      $desc = 'On blur function call';
      $ex = '$x->onblur(' . "'function()'" . ');';
      $out = 'onblur="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onchange attribute
      $el = 'onchange()';
      $desc = 'On change function call';
      $ex = '$x->onchange(' . "'function()'" . ');';
      $out = 'onchange="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onclick attribute
      $el = 'onclick()';
      $desc = 'On click function call';
      $ex = '$x->onclick(' . "'function()'" . ');';
      $out = 'onclick="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // ondblclick attribute
      $el = 'ondblclick()';
      $desc = 'On double click function call';
      $ex = '$x->ondblclick(' . "'function()'" . ');';
      $out = 'ondblclick="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onfocus attribute
      $el = 'onfocus()';
      $desc = 'On focus function call';
      $ex = '$x->onfocus(' . "'function()'" . ');';
      $out = 'onfocus="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onkeydown attribute
      $el = 'onkeydown()';
      $desc = 'On key down function call';
      $ex = '$x->onkeydown(' . "'function()'" . ');';
      $out = 'onkeydown="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onkeypress attribute
      $el = 'onkeypress()';
      $desc = 'On key press function call';
      $ex = '$x->onkeypress(' . "'function()'" . ');';
      $out = 'onkeypress="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onkeyup attribute
      $el = 'onkeyup()';
      $desc = 'On key up function call';
      $ex = '$x->onkeyup(' . "'function()'" . ');';
      $out = 'onkeyup="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onload attribute
      $el = 'onload()';
      $desc = 'On load function call';
      $ex = '$x->onload(' . "'function()'" . ');';
      $out = 'onload="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onmousedown attribute
      $el = 'onmousedown()';
      $desc = 'On mouse down function call';
      $ex = '$x->onmousedown(' . "'function()'" . ');';
      $out = 'onmousedown="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onmousemove attribute
      $el = 'onmousemove()';
      $desc = 'On mouse move function call';
      $ex = '$x->onmousemove(' . "'function()'" . ');';
      $out = 'onmousemove="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onmouseout attribute
      $el = 'onmouseout()';
      $desc = 'On mouse out function call';
      $ex = '$x->onmouseout(' . "'function()'" . ');';
      $out = 'onmouseout="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onmouseover attribute
      $el = 'onmouseover()';
      $desc = 'On mouse over function call';
      $ex = '$x->onmouseover(' . "'function()'" . ');';
      $out = 'onmouseover="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onmouseup attribute
      $el = 'onmouseup()';
      $desc = 'On mouse up function call';
      $ex = '$x->onmouseup(' . "'function()'" . ');';
      $out = 'onmouseup="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onreset attribute
      $el = 'onreset()';
      $desc = 'On reset function call';
      $ex = '$x->onreset(' . "'function()'" . ');';
      $out = 'onreset="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onselect attribute
      $el = 'onselect()';
      $desc = 'On select function call';
      $ex = '$x->onselect(' . "'function()'" . ');';
      $out = 'onselect="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onsubmit attribute
      $el = 'onsubmit()';
      $desc = 'On submit function call';
      $ex = '$x->onsubmit(' . "'function()'" . ');';
      $out = 'onsubmit="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // onunload attribute
      $el = 'onunload()';
      $desc = 'On unload function call';
      $ex = '$x->onunload(' . "'function()'" . ');';
      $out = 'onunload="function()"';
      $x->elrow($el,$desc,$ex,$out);

      // profile attribute
      $el = 'profile()';
      $desc = 'Profile';
      $ex = '$x->profile(' . "'value'" . ');';
      $out = 'profile="value"';
      $x->elrow($el,$desc,$ex,$out);

      // rel attribute
      $el = 'rel()';
      $desc = 'Relationship';
      $ex = '$x->rel(' . "'value'" . ');';
      $out = 'rel="value"';
      $x->elrow($el,$desc,$ex,$out);

      // rev attribute
      $el = 'rev()';
      $desc = 'Relationship Definition';
      $ex = '$x->rev(' . "'value'" . ');';
      $out = 'rev="value"';
      $x->elrow($el,$desc,$ex,$out);

      // rows attribute
      $el = 'rows()';
      $desc = 'Rows';
      $ex = '$x->rows(' . "'10'" . ');';
      $out = 'rows="10"';
      $x->elrow($el,$desc,$ex,$out);

      // rowspan attribute
      $el = 'rowspan()';
      $desc = 'Row span';
      $ex = '$x->rowspan(' . "'15'" . ');';
      $out = 'rowspan="15"';
      $x->elrow($el,$desc,$ex,$out);

      // scope attribute
      $el = 'scope()';
      $desc = 'Scope';
      $ex = '$x->scope(' . "'value'" . ');';
      $out = 'scope="value"';
      $x->elrow($el,$desc,$ex,$out);

      // size attribute
      $el = 'size()';
      $desc = 'Size';
      $ex = '$x->size(' . "'5'" . ');';
      $out = 'size="5"';
      $x->elrow($el,$desc,$ex,$out);

      // src attribute
      $el = 'src()';
      $desc = 'Source';
      $ex = '$x->src(' . "'https://link/to/source'" . ');';
      $out = 'src="https://link/to/source"';
      $x->elrow($el,$desc,$ex,$out);

      // standby attribute
      $el = 'standby()';
      $desc = 'Standby';
      $ex = '$x->standby(' . "'value'" . ');';
      $out = 'standby="value"';
      $x->elrow($el,$desc,$ex,$out);

      // style attribute
      $el = 'style()';
      $desc = 'CSS style';
      $ex = '$x->style(' . "'border: 1 solid;'" . ');';
      $out = 'style="border: 1 solid;"';
      $x->elrow($el,$desc,$ex,$out);

      // summary attribute
      $el = 'summary()';
      $desc = 'Summary';
      $ex = '$x->summary(' . "'value'" . ');';
      $out = 'summary="value"';
      $x->elrow($el,$desc,$ex,$out);

      // tabindex attribute
      $el = 'tabindex()';
      $desc = 'Tab index';
      $ex = '$x->tabindex(' . "'1'" . ');';
      $out = 'tabindex="1"';
      $x->elrow($el,$desc,$ex,$out);

      // target attribute
      $el = 'target()';
      $desc = 'Target';
      $ex = '$x->target(' . "'blank'" . ');';
      $out = 'target="_blank"';
      $x->elrow($el,$desc,$ex,$out);

      // title attribute
      $el = 'title()';
      $desc = 'Title';
      $ex = '$x->title(' . "'Title text'" . ');';
      $out = 'title="Title text"';
      $x->elrow($el,$desc,$ex,$out);

      // type attribute
      $el = 'type()';
      $desc = 'Type';
      $ex = '$x->type(' . "'text'" . ');';
      $out = 'type="text"';
      $x->elrow($el,$desc,$ex,$out);

      // valign attribute
      $el = 'valign()';
      $desc = 'Vertical alignment';
      $ex = '$x->valign(' . "'bottom'" . ');';
      $out = 'valign="bottom"';
      $x->elrow($el,$desc,$ex,$out);

      // valuetype attribute
      $el = 'valuetype()';
      $desc = 'Value type';
      $ex = '$x->valuetype(' . "'value'" . ');';
      $out = 'valuetype="value"';
      $x->elrow($el,$desc,$ex,$out);

      // version attribute
      $el = 'version()';
      $desc = 'Version';
      $ex = '$x->version(' . "'1.0'" . ');';
      $out = 'version="1.0"';
      $x->elrow($el,$desc,$ex,$out);

      // width attribute
      $el = 'width()';
      $desc = 'Width';
      $ex = '$x->width(' . "'150'" . ');';
      $out = 'width="150"';
      $x->elrow($el,$desc,$ex,$out);

      // xmllang attribute
      $el = 'xmllang()';
      $desc = 'XML language';
      $ex = '$x->xmllang(' . "'en'" . ');';
      $out = 'xml:lang="en"';
      $x->elrow($el,$desc,$ex,$out);

      // xmlns attribute
      $el = 'xmlns()';
      $desc = 'XML namespace';
      $ex = '$x->xmlns(' . "'https://www.w3.org/1999/xhtml'" . ');';
      $out = 'xmlns="https://www.w3.org/1999/xhtml"';
      $x->elrow($el,$desc,$ex,$out);

      // xmlnsxsi attribute
      $el = 'xmlnsxsi()';
      $desc = 'XML namespace schema instance';
      $ex = '$x->xmlnsxsi(' . "'https://www.w3.org/2001/XMLSchema-instance'" . ');';
      $out = 'xmlns:xsi="https://www.w3.org/2001/XMLSchema-instance"';
      $x->elrow($el,$desc,$ex,$out);

      // xmlspace attribute
      $el = 'xmlspace()';
      $desc = 'XML namespace';
      $ex = '$x->xmlspace(' . "'https://www.w3.org/1999/xhtml'" . ');';
      $out = 'xmlspace="https://www.w3.org/1999/xhtml"';
      $x->elrow($el,$desc,$ex,$out);

      // xsischemalocation attribute
      $el = 'xsischemalocation()';
      $desc = 'XML namespace schema instance xsd location';
      $ex = '$x->xsischemalocation(' . "'https://www.w3.org/2001/XMLSchema-instance'" . ');';
      $out = 'xsi:schemaLocation="https://www.w3.org/2001/XMLSchema-instance"';
      $x->elrow($el,$desc,$ex,$out);

      $content .= $x->table()->html();
      $content .= $x->br()->html();

    // Page Options
    $content .= $x->h2(
      $x->name('PageOptions')
        ->id('PageOptions')
        ->a('Page Options')
        ->html()
    )->html();

      // Table Headers
      $x->th('Option');
      $x->th('Description');
      $x->th('Example');
      $x->th('Output');
      $x->tr();

      // description
      $el = 'description';
      $desc = 'Page description - This element will automatically be added when the head element is called.';
      $ex = '$x->description(' . "'Text of page description'" . ');';
      $out = '<meta name="description" content="Text of page description">';
      $x->elrow($el,$desc,$ex,$out);

      // keywords
      $el = 'keywords';
      $desc = 'Page keywords - This element will automatically be added when the head element is called.';
      $ex = '$x->keyword(' . "'word 1'" . ');
$x->keyword(' . "'word 2'" . ');
$x->keyword(' . "'word 3'" . ');';
      $out = '<meta name="keywords" content="word 1, word 2, word 3">';
      $x->elrow($el,$desc,$ex,$out);

      // title element
      $el = 'title';
      $desc = 'Page title - This element will automatically be added when the head element is called.';
      $ex = '$x->pagetitle(' . "'Text of page title'" . ');';
      $out = $x->pagetitle('Text of page title')->html();
      $x->elrow($el,$desc,$ex,$out);

      $content .= $x->table()->html();
      $content .= $x->br()->html();

    // Config
    $content .= $x->h2(
      $x->name('Config')
        ->id('Config')
        ->a('Config')
        ->html()
    )->html();

    $content .= $x->p(
      'Config file located: ' . $x->i('.../vendor/splittlogic/xhtml/config/xhtml.php')->html()
    )->html();

    $content .= $x->p(
      'If not called, the "default" config will be applied.  To call this function to change:'
    )->html();

    $content .= $x->pre('$x->config(' . "'configName'" . ');')->html();

    $content .= $x->p(
      'All available config options (note - any attribute name can be set under the "attributes" array with any given setting):'
    )->html();

    $content .= $x->pre(
      "
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
          'content' => 'html PUBLIC " . '-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd"' . ",
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
      "
    )->html();

    // Blade
    $content .= $x->h2(
      $x->name('Blade')
        ->id('Blade')
        ->a('Blade')
        ->html()
    )->html();

    $content .= $x->p(
      'Some elements and variables can be called via blade templating.  Null will be returned if they are not set.  All attributes applied when calling the element via the route function will be applied.'
    )->html();

      // Heading
      $x->th('Element / Variable');
      $x->th('Description');
      $x->th('Calling via Blade');
      $x->th('Output');
      $x->tr();

      // bodyclose
      $x->style('text-align:center')->td('Body close');
      $x->style('text-align:center')->td('HTML body close tag');
      $x->td($x->centercell('{!! xhtml::blade(' . "'bodyclose'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('</body>')
          )->html()
        )
      );
      $x->tr();

      // bodyopen
      $x->style('text-align:center')->td('Body open');
      $x->style('text-align:center')->td('HTML body open tag');
      $x->td($x->centercell('{!! xhtml::blade(' . "'bodyopen'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('<body ...>')
          )->html()
        )
      );
      $x->tr();

      // content
      $x->style('text-align:center')->td('$content');
      $x->style('text-align:center')->td('The $content variable can be passed that will be wrapped in the body tags.');
      $x->td($x->centercell('view(' . "'xhtml::blank',['content' => " . '$content' . "]" . ');'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('<body> ')
              . $x->i('output of content')->html()
              . htmlentities('</body>')
          )->html()
        )
      );
      $x->tr();

      // doctype
      $x->style('text-align:center')->td('DOCTYPE');
      $x->style('text-align:center')->td('DOCTYPE header tag');
      $x->td($x->centercell('{!! xhtml::blade(' . "'doctype'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('<!DOCTYPE ...>')
          )->html()
        )
      );
      $x->tr();

      // footer
      $x->style('text-align:center')->td('Footer');
      $x->style('text-align:center')->td('HTML footer, before body & html close tag.  Usually where to load javascript.');
      $x->td($x->centercell('{!! xhtml::blade(' . "'footer'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre('')->html()
        )
      );
      $x->tr();

      // head
      $x->style('text-align:center')->td('Head');
      $x->style('text-align:center')->td('HTML head tag');
      $x->td($x->centercell('{!! xhtml::blade(' . "'head'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('<head>...</head>')
          )->html()
        )
      );
      $x->tr();

      // htmlclose
      $x->style('text-align:center')->td('html close');
      $x->style('text-align:center')->td('HTML close tag');
      $x->td($x->centercell('{!! xhtml::blade(' . "'htmlclose'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('</html>')
          )->html()
        )
      );
      $x->tr();

      // htmlopen
      $x->style('text-align:center')->td('html open');
      $x->style('text-align:center')->td('HTML open tag');
      $x->td($x->centercell('{!! xhtml::blade(' . "'htmlopen'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('<html ...>')
          )->html()
        )
      );
      $x->tr();

      // title
      $x->style('text-align:center')->td('Title');
      $x->style('text-align:center')->td('Title header tag');
      $x->td($x->centercell('{!! xhtml::blade(' . "'title'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('<title>...</title>')
          )->html()
        )
      );
      $x->tr();

      // view
      $x->style('text-align:center')->td('view');
      $x->style('text-align:center')->td('Calling a blank view layout.');
      $x->td($x->centercell('view(' . "'xhtml::blank',['content' => " . '$content' . "]" . ');'));
      $x->td(
        $x->centercell(
          $x->pre(
            $x->i('HTML output')->html()
          )->html()
        )
      );
      $x->tr();

      // xml
      $x->style('text-align:center')->td('XML');
      $x->style('text-align:center')->td('XML header tag');
      $x->td($x->centercell('{!! xhtml::blade(' . "'xml'" . ') !!}'));
      $x->td(
        $x->centercell(
          $x->pre(
            htmlentities('<?xml ... ?>')
          )->html()
        )
      );
      $x->tr();

    $content .= $x->table()->html();
    $content .= $x->br()->html();

    // Array to Table
    $content .= $x->h2(
      $x->name('Arraytotable')
        ->id('Arraytotable')
        ->a('Array to Table')
        ->html()
    )->html();

    $content .= 'Return html table from given array and/or header. To call the function:';
    $content .= $x->br()->html();
    $content .= $x->pre('$x->arraytotable($rows,$header);')->html();
    $content .= $x->h4('Example of Array Layout:')->html();

    $example = '    $headers[] = ' . "'Column 1'" . ';
    $headers[] = ' . "'Column 2'" . ';
    $headers[] = ' . "'Column 3'" . ';
    $headers[] = ' . "'Column 4'" . ';
    $headers[] = ' . "'Column 5'" . ';

    $data[' . "'row1'" . '][] = ' . "'data 1'" . ';
    $data[' . "'row1'" . '][] = ' . "'data 2'" . ';
    $data[' . "'row1'" . '][] = ' . "'data 3'" . ';
    $data[' . "'row1'" . '][] = ' . "'data 4'" . ';
    $data[' . "'row1'" . '][] = ' . "'data 5'" . ';

    $data[' . "'row2'" . '][] = ' . "'data 6'" . ';
    $data[' . "'row2'" . '][] = ' . "'data 7'" . ';
    $data[' . "'row2'" . '][] = ' . "'data 8'" . ';
    $data[' . "'row2'" . '][] = ' . "'data 9'" . ';
    $data[' . "'row2'" . '][] = ' . "'data 10'" . ';

    $data[' . "'row3'" . '][] = ' . "'data 11'" . ';
    $data[' . "'row3'" . '][] = ' . "'data 12'" . ';
    $data[' . "'row3'" . '][] = ' . "'data 13'" . ';
    $data[' . "'row3'" . '][] = ' . "'data 14'" . ';
    $data[' . "'row3'" . '][] = ' . "'data 15'" . ';

    $content .= $x->arraytotable($data,$headers);';

    $content .= $x->pre($example)->html();

    $content .= $x->h4('Output:')->html();

    $headers[] = 'Column 1';
    $headers[] = 'Column 2';
    $headers[] = 'Column 3';
    $headers[] = 'Column 4';
    $headers[] = 'Column 5';

    $data['row1'][] = 'data 1';
    $data['row1'][] = 'data 2';
    $data['row1'][] = 'data 3';
    $data['row1'][] = 'data 4';
    $data['row1'][] = 'data 5';

    $data['row2'][] = 'data 6';
    $data['row2'][] = 'data 7';
    $data['row2'][] = 'data 8';
    $data['row2'][] = 'data 9';
    $data['row2'][] = 'data 10';

    $data['row3'][] = 'data 11';
    $data['row3'][] = 'data 12';
    $data['row3'][] = 'data 13';
    $data['row3'][] = 'data 14';
    $data['row3'][] = 'data 15';

    $content .= $x->arraytotable($data,$headers);

    return $content;
  }


  // Return content in div to center table cell properly
  private function centercell($content = null)
  {
    return self::x()
      ->class('xhtml-pre-div')
      ->div($content)
      ->html();
  }


  // Set a row for the elements table
  private function elrow($el,$desc,$ex,$out)
  {
    // Element Name
    self::x()
      ->style('text-align:center;')
      ->td($el);

    // Description
    self::x()
      ->style('text-align:center;width:18%;')
      ->td($desc);

    // Example
     self::x()
      ->td(
        self::centercell(
          self::pre($ex)->html()
        )
      );

    // Output
    self::x()
      ->td(
        self::centercell(
          self::pre(
            htmlentities($out)
          )->html()
        )
      );

    // Create Table Row
    self::x()->tr();
  }


  // Run Class as static
  public static function x()
  {
    $x = new xhtml;
    return $x;
  }


  // All for nesting elements
  public function z($value = null)
  {
    $this->set('znest',$value);
    return $this;
  }


}

/*
|--------------------------------------------------------------------------
| variables
|--------------------------------------------------------------------------
attributes *
blade-bodyclose
blade-bodyopen
blade-doctype
blade-head
blade-htmlclose
blade-htmlopen
blade-script-footer
blade-style-footer
blade-style-head
blade-title
blade-xml
classes *
config
content *
dls ***
eol
extrafields *
html
id
idcount
idtemp *
lis ***
options ***
pagelocation **
tds ***
thead ***
ths ***
trs ***
znest *

* = Need to reset
** = Need to reset in element
*** = Need to reset after an element is called

*/
