<?php

/**
 * Cliente filter form base class.
 *
 * @package    lalider
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClienteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'identification'   => new sfWidgetFormFilterInput(),
      'businessName'     => new sfWidgetFormFilterInput(),
      'tradename'        => new sfWidgetFormFilterInput(),
      'credit'           => new sfWidgetFormFilterInput(),
      'isBlocked'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'state'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'avalilableCredit' => new sfWidgetFormFilterInput(),
      'idPricelist'      => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'identification'   => new sfValidatorPass(array('required' => false)),
      'businessName'     => new sfValidatorPass(array('required' => false)),
      'tradename'        => new sfValidatorPass(array('required' => false)),
      'credit'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'isBlocked'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'state'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'avalilableCredit' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'idPricelist'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('cliente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

  public function getFields()
  {
    return array(
      'idCustomer'       => 'Number',
      'identification'   => 'Text',
      'businessName'     => 'Text',
      'tradename'        => 'Text',
      'credit'           => 'Number',
      'isBlocked'        => 'Boolean',
      'state'            => 'Boolean',
      'avalilableCredit' => 'Number',
      'idPricelist'      => 'Number',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
