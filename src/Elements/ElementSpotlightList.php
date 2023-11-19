<?php

namespace DNADesign\Elemental\Models;

use DNADesign\Elemental\Models\BaseElement;
use DNADesign\Elemental\DataObjects\Spotlight;

class ElementSpotlightList extends BaseElement
{
  private static $table_name = 'DNADesign_ElementCarbonSpotlightList';

  private static $description = 'Spotlight is a basic combination of images, titles, text, buttons and links to create flexible and versatile content blocks';

  private static $singular_name = 'spotlight list';

  private static $plural_name = 'spotlight lists';

  private static $icon = 'font-icon-block-layout';

  private static $db = [
    'Intro' => 'Text',
  ];

  private static $has_many = [
    'Spotlights' => Spotlight::class,
  ];

  private static $owns = [
    'Spotlights'
  ];

  public function getType()
  {
    return _t(__class__ . '.BlockType', 'Spotlights');
  }

  public function getSimpleClassName()
  {
    return 'element-spotlight-list';
  }

  public function inlineEditable()
  {
    return false;
  }
}
