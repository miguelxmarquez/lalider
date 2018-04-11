<?php

/**
 * Sede_Cliente form base class.
 *
 * @method Sede_Cliente getObject() Returns the current form's model object
 *
 * @package    lalider
 * @subpackage form
 * @author     Miguel Marquez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSede_ClienteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'idCustomer'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'identification'   => new sfWidgetFormInputText(),
      'idCustomerOffice' => new sfWidgetFormInputText(),
      'address'          => new sfWidgetFormInputText(),
      'name'             => new sfWidgetFormInputText(),
      'countryId'        => new sfWidgetFormInputText(),
      'countryName'      => new sfWidgetFormInputText(),
      'cityId'           => new sfWidgetFormInputText(),
      'cityName'         => new sfWidgetFormInputText(),
      'contactPerson1'   => new sfWidgetFormInputText(),
      'cellphoneContact' => new sfWidgetFormInputText(),
      'phoneNumber'      => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idCustomer'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'required' => false)),
      'identification'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'idCustomerOffice' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'countryId'        => new sfValidatorInteger(array('required' => false)),
      'countryName'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cityId'           => new sfValidatorInteger(array('required' => false)),
      'cityName'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'contactPerson1'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'cellphoneContact' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'phoneNumber'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(array('required' => false)),
      'updated_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sede_cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sede_Cliente';
  }

}
