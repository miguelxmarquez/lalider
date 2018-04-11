<?php

/**
 * Cliente form base class.
 *
 * @method Cliente getObject() Returns the current form's model object
 *
 * @package    lalider
 * @subpackage form
 * @author     Miguel Marquez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClienteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idCustomer'       => new sfWidgetFormInputHidden(),
      'identification'   => new sfWidgetFormInputText(),
      'businessName'     => new sfWidgetFormInputText(),
      'tradename'        => new sfWidgetFormInputText(),
      'credit'           => new sfWidgetFormInputText(),
      'isBlocked'        => new sfWidgetFormInputCheckbox(),
      'state'            => new sfWidgetFormInputCheckbox(),
      'avalilableCredit' => new sfWidgetFormInputText(),
      'idPricelist'      => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idCustomer'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idCustomer')), 'empty_value' => $this->getObject()->get('idCustomer'), 'required' => false)),
      'identification'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'businessName'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tradename'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'credit'           => new sfValidatorNumber(array('required' => false)),
      'isBlocked'        => new sfValidatorBoolean(array('required' => false)),
      'state'            => new sfValidatorBoolean(array('required' => false)),
      'avalilableCredit' => new sfValidatorNumber(array('required' => false)),
      'idPricelist'      => new sfValidatorInteger(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(array('required' => false)),
      'updated_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Cliente', 'column' => array('identification')))
    );

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

}
