@if (isset($_GET['splittlogicElement']))
{!! xhtml::blade('element') !!}
@else
{!! xhtml::blade('xml') !!}
{!! xhtml::blade('doctype') !!}
{!! xhtml::blade('htmlopen') !!}
{!! xhtml::blade('head') !!}
{!! xhtml::blade('bodyopen') !!}
@if (isset($content))
  {!! $content !!}
@endif
{!! xhtml::blade('footer') !!}
{!! xhtml::blade('bodyclose') !!}
{!! xhtml::blade('htmlclose') !!}
@endif
