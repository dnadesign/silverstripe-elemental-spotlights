<?php

namespace DNADesign\Elemental\Controllers;

use SilverStripe\View\Requirements;

class ElementSpotlightListController extends ElementController
{
  public function init()
  {
    parent::init();

    Requirements::css('dnadesign/silverstripe-elemental-spotlights: client/css/element-spotlight-list.css');
    Requirements::css('dnadesign/silverstripe-elemental-spotlights: client/css/element-spotlight.css');
  }
}
