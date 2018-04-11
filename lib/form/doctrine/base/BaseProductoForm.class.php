<?php

/**
 * Producto form base class.
 *
 * @method Producto getObject() Returns the current form's model object
 *
 * @package    lalider
 * @subpackage form
 * @author     Miguel Marquez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'code'            => new sfWidgetFormInputText(),
      'productRef'      => new sfWidgetFormInputText(),
      'name'            => new sfWidgetFormInputText(),
      'unit'            => new sfWidgetFormInputText(),
      'currencySymbol'  => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormInputText(),
      'idBrand'         => new sfWidgetFormInputText(),
      'brand'           => new sfWidgetFormInputText(),
      'idCategory'      => new sfWidgetFormInputText(),
      'categoryName'    => new sfWidgetFormInputText(),
      'idSubcategory'   => new sfWidgetFormInputText(),
      'subcategoryName' => new sfWidgetFormInputText(),
      'idLine'          => new sfWidgetFormInputText(),
      'lineName'        => new sfWidgetFormInputText(),
      'supplierName'    => new sfWidgetFormInputText(),
      'price'           => new sfWidgetFormInputText(),
      'tax'             => new sfWidgetFormInputText(),
      'discountPrice'   => new sfWidgetFormInputText(),
      'state'           => new sfWidgetFormInputCheckbox(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'code'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'productRef'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'unit'            => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'currencySymbol'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'description'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'idBrand'         => new sfValidatorInteger(array('required' => false)),
      'brand'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'idCategory'      => new sfValidatorInteger(array('required' => false)),
      'categoryName'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'idSubcategory'   => new sfValidatorInteger(array('required' => false)),
      'subcategoryName' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'idLine'          => new sfValidatorInteger(array('required' => false)),
      'lineName'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'supplierName'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price'           => new sfValidatorNumber(array('required' => false)),
      'tax'             => new sfValidatorNumber(array('required' => false)),
      'discountPrice'   => new sfValidatorNumber(array('required' => false)),
      'state'           => new sfValidatorBoolean(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
      'updated_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('producto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }

}
