<?php

/**
 * Producto filter form base class.
 *
 * @package    lalider
 * @subpackage filter
 * @author     Miguel Marquez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'code'            => new sfWidgetFormFilterInput(),
      'productRef'      => new sfWidgetFormFilterInput(),
      'name'            => new sfWidgetFormFilterInput(),
      'unit'            => new sfWidgetFormFilterInput(),
      'currencySymbol'  => new sfWidgetFormFilterInput(),
      'description'     => new sfWidgetFormFilterInput(),
      'idBrand'         => new sfWidgetFormFilterInput(),
      'brand'           => new sfWidgetFormFilterInput(),
      'idCategory'      => new sfWidgetFormFilterInput(),
      'categoryName'    => new sfWidgetFormFilterInput(),
      'idSubcategory'   => new sfWidgetFormFilterInput(),
      'subcategoryName' => new sfWidgetFormFilterInput(),
      'idLine'          => new sfWidgetFormFilterInput(),
      'lineName'        => new sfWidgetFormFilterInput(),
      'supplierName'    => new sfWidgetFormFilterInput(),
      'price'           => new sfWidgetFormFilterInput(),
      'tax'             => new sfWidgetFormFilterInput(),
      'discountPrice'   => new sfWidgetFormFilterInput(),
      'state'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'code'            => new sfValidatorPass(array('required' => false)),
      'productRef'      => new sfValidatorPass(array('required' => false)),
      'name'            => new sfValidatorPass(array('required' => false)),
      'unit'            => new sfValidatorPass(array('required' => false)),
      'currencySymbol'  => new sfValidatorPass(array('required' => false)),
      'description'     => new sfValidatorPass(array('required' => false)),
      'idBrand'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'brand'           => new sfValidatorPass(array('required' => false)),
      'idCategory'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'categoryName'    => new sfValidatorPass(array('required' => false)),
      'idSubcategory'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'subcategoryName' => new sfValidatorPass(array('required' => false)),
      'idLine'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lineName'        => new sfValidatorPass(array('required' => false)),
      'supplierName'    => new sfValidatorPass(array('required' => false)),
      'price'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tax'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'discountPrice'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'state'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('producto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'code'            => 'Text',
      'productRef'      => 'Text',
      'name'            => 'Text',
      'unit'            => 'Text',
      'currencySymbol'  => 'Text',
      'description'     => 'Text',
      'idBrand'         => 'Number',
      'brand'           => 'Text',
      'idCategory'      => 'Number',
      'categoryName'    => 'Text',
      'idSubcategory'   => 'Number',
      'subcategoryName' => 'Text',
      'idLine'          => 'Number',
      'lineName'        => 'Text',
      'supplierName'    => 'Text',
      'price'           => 'Number',
      'tax'             => 'Number',
      'discountPrice'   => 'Number',
      'state'           => 'Boolean',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
