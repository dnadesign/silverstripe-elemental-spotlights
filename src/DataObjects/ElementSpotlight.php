<?php

namespace DNADesign\Elemental\DataObjects;

use DNADesign\Elemental\Models\ElementSpotlightList;
use DNADesign\Elemental\Forms\TextCheckboxGroupField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\TextField;
use SilverShop\HasOneField\HasOneButtonField;
use gorriecoe\Link\Models\Link;

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
    'Image',
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();

    $fields->removeByName('ShowTitle');
    $fields->removeByName('LinkID');
    $fields->removeByName('ListID');

    $fields->addFieldsToTab('Root.Main', [
      HasOneButtonField::create($this, 'Link'),
    ]);

    $fields->replaceField(
      'Title',
      TextCheckboxGroupField::create(
        TextField::create('Title', 'Title (displayed if checked)'),
        CheckboxField::create('ShowTitle', 'Displayed')
      )
      ->setName('TitleAndDisplayed')
    );

    return $fields;
  }
}
