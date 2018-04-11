<?php

/**
 * Cartera form base class.
 *
 * @method Cartera getObject() Returns the current form's model object
 *
 * @package    lalider
 * @subpackage form
 * @author     Miguel Marquez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCarteraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'idCustomer'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'invoiceNumber' => new sfWidgetFormInputText(),
      'totalValue'    => new sfWidgetFormInputText(),
      'balance'       => new sfWidgetFormInputText(),
      'taxValue'      => new sfWidgetFormInputText(),
      'createDate'    => new sfWidgetFormDateTime(),
      'dueDate'       => new sfWidgetFormDateTime(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idCustomer'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'required' => false)),
      'invoiceNumber' => new sfValidatorInteger(array('required' => false)),
      'totalValue'    => new sfValidatorNumber(array('required' => false)),
      'balance'       => new sfValidatorNumber(array('required' => false)),
      'taxValue'      => new sfValidatorNumber(array('required' => false)),
      'createDate'    => new sfValidatorDateTime(array('required' => false)),
      'dueDate'       => new sfValidatorDateTime(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cartera[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cartera';
  }

}
