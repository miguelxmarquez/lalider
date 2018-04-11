<?php

/**
 * cliente module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage cliente
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClienteGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  '_new' =>   array(    'label' => 'Crear Nuevo Cliente',  ),  '_edit' =>   array(    'label' => 'Editar',  ),  '_delete' =>   array(    'label' => 'Eliminar',  ),);
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%identification%% - %%businessName%% - %%credit%% - %%avalilableCredit%% - %%state%% - %%isBlocked%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Clientes';
  }

  public function getEditTitle()
  {
    return 'Editando el Cliente "%%businessName%%"';
  }

  public function getNewTitle()
  {
    return 'Nuevo Cliente';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'identification',  1 => 'businessName',  2 => 'credit',  3 => 'avalilableCredit',  4 => 'state',  5 => 'isBlocked',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array(  0 => 'identification',  1 => 'businessName',  2 => 'credit',  3 => 'avalilableCredit',  4 => 'state',  5 => 'isBlocked',);
  }

  public function getNewDisplay()
  {
    return array(  0 => 'identification',  1 => 'businessName',  2 => 'credit',  3 => 'avalilableCredit',  4 => 'state',  5 => 'isBlocked',);
  }

  public function getListDisplay()
  {
    return array(  0 => 'identification',  1 => 'businessName',  2 => 'credit',  3 => 'avalilableCredit',  4 => 'state',  5 => 'isBlocked',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idCustomer' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'identification' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'NIT',),
      'businessName' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Razon Social',),
      'tradename' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'credit' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Credito',),
      'isBlocked' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'label' => 'Bloqueado',),
      'state' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'label' => 'Estado',),
      'avalilableCredit' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Credito Disponible',),
      'idPricelist' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idCustomer' => array(),
      'identification' => array(),
      'businessName' => array(),
      'tradename' => array(),
      'credit' => array(),
      'isBlocked' => array(),
      'state' => array(),
      'avalilableCredit' => array(),
      'idPricelist' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idCustomer' => array(),
      'identification' => array(),
      'businessName' => array(),
      'tradename' => array(),
      'credit' => array(),
      'isBlocked' => array(),
      'state' => array(),
      'avalilableCredit' => array(),
      'idPricelist' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idCustomer' => array(),
      'identification' => array(),
      'businessName' => array(),
      'tradename' => array(),
      'credit' => array(),
      'isBlocked' => array(),
      'state' => array(),
      'avalilableCredit' => array(),
      'idPricelist' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idCustomer' => array(),
      'identification' => array(),
      'businessName' => array(),
      'tradename' => array(),
      'credit' => array(),
      'isBlocked' => array(),
      'state' => array(),
      'avalilableCredit' => array(),
      'idPricelist' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idCustomer' => array(),
      'identification' => array(),
      'businessName' => array(),
      'tradename' => array(),
      'credit' => array(),
      'isBlocked' => array(),
      'state' => array(),
      'avalilableCredit' => array(),
      'idPricelist' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ClienteForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ClienteFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 5;
  }

  public function getDefaultSort()
  {
    return array('identification', 'asc');
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
