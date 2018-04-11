<?php

/**
 * Sede_Cliente filter form base class.
 *
 * @package    lalider
 * @subpackage filter
 * @author     Miguel Marquez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSede_ClienteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idCustomer'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'identification'   => new sfWidgetFormFilterInput(),
      'idCustomerOffice' => new sfWidgetFormFilterInput(),
      'address'          => new sfWidgetFormFilterInput(),
      'name'             => new sfWidgetFormFilterInput(),
      'countryId'        => new sfWidgetFormFilterInput(),
      'countryName'      => new sfWidgetFormFilterInput(),
      'cityId'           => new sfWidgetFormFilterInput(),
      'cityName'         => new sfWidgetFormFilterInput(),
      'contactPerson1'   => new sfWidgetFormFilterInput(),
      'cellphoneContact' => new sfWidgetFormFilterInput(),
      'phoneNumber'      => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'idCustomer'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cliente'), 'column' => 'idCustomer')),
      'identification'   => new sfValidatorPass(array('required' => false)),
      'idCustomerOffice' => new sfValidatorPass(array('required' => false)),
      'address'          => new sfValidatorPass(array('required' => false)),
      'name'             => new sfValidatorPass(array('required' => false)),
      'countryId'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'countryName'      => new sfValidatorPass(array('required' => false)),
      'cityId'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cityName'         => new sfValidatorPass(array('required' => false)),
      'contactPerson1'   => new sfValidatorPass(array('required' => false)),
      'cellphoneContact' => new sfValidatorPass(array('required' => false)),
      'phoneNumber'      => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sede_cliente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sede_Cliente';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'idCustomer'       => 'ForeignKey',
      'identification'   => 'Text',
      'idCustomerOffice' => 'Text',
      'address'          => 'Text',
      'name'             => 'Text',
      'countryId'        => 'Number',
      'countryName'      => 'Text',
      'cityId'           => 'Number',
      'cityName'         => 'Text',
      'contactPerson1'   => 'Text',
      'cellphoneContact' => 'Text',
      'phoneNumber'      => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
