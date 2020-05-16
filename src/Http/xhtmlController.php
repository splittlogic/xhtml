<?php

namespace splittlogic\xhtml\Http;

use Illuminate\Routing\Controller;

use splittlogic\xhtml\xhtml;

class xhtmlController extends Controller
{


  public function about()
  {

    $content = xhtml::about();

    return view('xhtml::blank',['content' => $content]);

  }


}
