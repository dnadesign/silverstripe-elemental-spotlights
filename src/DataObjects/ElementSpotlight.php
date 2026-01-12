<?php

namespace DNADesign\Elemental\DataObjects;

use DNADesign\Elemental\Models\ElementSpotlightList;
use DNADesign\Elemental\Forms\TextCheckboxGroupField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Assets\Image;
use SilverStripe\LinkField\Form\LinkField;
use SilverStripe\LinkField\Models\Link;

class Spotlight extends DataObject
{
  private static $table_name = 'DNADesign_Spotlight';

  private static $singular_name = 'spotlight';

  private static $plural_name = 'spotlights';

  private static $db = [
    'Title' => 'Varchar(255)',
    'ShowTitle' => 'Boolean',
    'Text' => 'Text',
  ];

  private static $has_one = [
    'List' => ElementSpotlightList::class,
    'Image' => Image::class,
    'Link' => Link::class
  ];

  private static $owns = [
    'Link',
    'Image',
  ];

  private static array $cascade_deletes = [
    'Link',
  ];

  private static array $cascade_duplicates = [
    'Link',
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();

    $fields->removeByName('ShowTitle');
    $fields->removeByName('ListID');

    $fields->addFieldsToTab('Root.Main', [
      LinkField::create('Link'),
    ]);

    $fields->replaceField(
      'Title',
      TextCheckboxGroupField::create()
        ->setName('TitleAndDisplayed')
    );

    return $fields;
  }
}
