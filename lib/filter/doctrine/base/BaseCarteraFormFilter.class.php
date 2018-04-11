<?php

/**
 * Cartera filter form base class.
 *
 * @package    lalider
 * @subpackage filter
 * @author     Miguel Marquez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCarteraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idCustomer'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'invoiceNumber' => new sfWidgetFormFilterInput(),
      'totalValue'    => new sfWidgetFormFilterInput(),
      'balance'       => new sfWidgetFormFilterInput(),
      'taxValue'      => new sfWidgetFormFilterInput(),
      'createDate'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'dueDate'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'idCustomer'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cliente'), 'column' => 'idCustomer')),
      'invoiceNumber' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'totalValue'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'balance'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'taxValue'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'createDate'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'dueDate'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('cartera_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cartera';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'idCustomer'    => 'ForeignKey',
      'invoiceNumber' => 'Number',
      'totalValue'    => 'Number',
      'balance'       => 'Number',
      'taxValue'      => 'Number',
      'createDate'    => 'Date',
      'dueDate'       => 'Date',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
