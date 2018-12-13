<?php

namespace DNADesign\Elemental\Controllers;

use SilverStripe\View\Requirements;

class ElementSpotlightController extends ElementController
{
  public function init()
  {
    parent::init();

    Requirements::css('dnadesign/silverstripe-elemental-carbon-spotlight: client/css/element-spotlight.css');
  }
}
