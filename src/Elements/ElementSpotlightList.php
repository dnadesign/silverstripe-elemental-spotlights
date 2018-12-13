<?php

namespace DNADesign\Elemental\Models;

use DNADesign\ElementalList\Model\ElementList;
use DNADesign\Elemental\Controllers\ElementSpotlightListController;

class ElementSpotlightList extends ElementList
{
  private static $table_name = 'ElementCarbonSpotlightList';

  private static $description = 'Collection of Spotlight modules';

  private static $singular_name = 'spotlight list';

  private static $plural_name = 'spotlight lists';

  private static $icon = 'font-icon-block-list';

  private static $controller_class = ElementSpotlightListController::class;

  private static $db = [
    'Intro' => 'Text',
  ];

  public function getType()
  {
    return _t(__class__ . '.BlockType', 'Spotlight List');
  }
}
