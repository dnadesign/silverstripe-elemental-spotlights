<?php

namespace DNADesign\Elemental\Models;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use gorriecoe\Link\Models\Link;
use DNADesign\Elemental\Controllers\ElementSpotlightController;

class ElementSpotlight extends BaseElement
{
  private static $table_name = 'ElementCarbonSpotlight';

  private static $description = 'Spotlight is a basic combination of images, titles, text, buttons and links to create flexible and versatile content blocks';

  private static $singular_name = 'spotlight';

  private static $plural_name = 'spotlights';

  private static $controller_class = ElementSpotlightController::class;

  private static $controller_template = 'ElementSpotlightHolder';

  private static $icon = 'font-icon-block-layout';

  private static $db = [
    'Text' => 'Text',
  ];

  private static $has_one = array(
    'Image' => Image::class,
  );

  private static $many_many = array(
    'Links' => Link::class,
  );

  private static $many_many_extraFields = [
    'Links' => [
        'Sort' => 'Int'
    ]
  ];

  public function getType()
  {
    return _t(__class__ . '.BlockType', 'Spotlight');
  }

  public function getSimpleClassName()
  {
    return 'element-spotlight';
  }

}
