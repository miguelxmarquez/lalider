<?php

/**
 * producto module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage producto
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProductoGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  '_new' =>   array(    'label' => 'Crear Nuevo Producto',  ),  '_edit' =>   array(    'label' => 'Editar',  ),  '_delete' =>   array(    'label' => 'Eliminar',  ),);
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
    return '%%id%% - %%code%% - %%productRef%% - %%name%% - %%unit%% - %%brand%% - %%price%% - %%tax%% - %%discountPrice%% - %%state%%';
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
    return 'Editando el Cliente "%%name%%"';
  }

  public function getNewTitle()
  {
    return 'Nuevo Producto';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'id',  1 => 'code',  2 => 'productRef',  3 => 'name',  4 => 'brand',  5 => 'price',  6 => 'state',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array(  0 => 'id',  1 => 'code',  2 => 'productRef',  3 => 'name',  4 => 'unit',  5 => 'brand',  6 => 'price',  7 => 'tax',  8 => 'discountPrice',  9 => 'state',);
  }

  public function getNewDisplay()
  {
    return array(  0 => 'id',  1 => 'code',  2 => 'productRef',  3 => 'name',  4 => 'unit',  5 => 'brand',  6 => 'price',  7 => 'tax',  8 => 'discountPrice',  9 => 'state',);
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'code',  2 => 'productRef',  3 => 'name',  4 => 'unit',  5 => 'brand',  6 => 'price',  7 => 'tax',  8 => 'discountPrice',  9 => 'state',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'ID',),
      'code' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Codigo',),
      'productRef' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Referencia',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre',),
      'unit' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Unidad',),
      'currencySymbol' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'idBrand' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'brand' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Marca',),
      'idCategory' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'categoryName' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'idSubcategory' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'subcategoryName' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'idLine' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'lineName' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'supplierName' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'price' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Precio',),
      'tax' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'I.V.A.',),
      'discountPrice' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Descuento',),
      'state' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'label' => 'Estado',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'code' => array(),
      'productRef' => array(),
      'name' => array(),
      'unit' => array(),
      'currencySymbol' => array(),
      'description' => array(),
      'idBrand' => array(),
      'brand' => array(),
      'idCategory' => array(),
      'categoryName' => array(),
      'idSubcategory' => array(),
      'subcategoryName' => array(),
      'idLine' => array(),
      'lineName' => array(),
      'supplierName' => array(),
      'price' => array(),
      'tax' => array(),
      'discountPrice' => array(),
      'state' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'code' => array(),
      'productRef' => array(),
      'name' => array(),
      'unit' => array(),
      'currencySymbol' => array(),
      'description' => array(),
      'idBrand' => array(),
      'brand' => array(),
      'idCategory' => array(),
      'categoryName' => array(),
      'idSubcategory' => array(),
      'subcategoryName' => array(),
      'idLine' => array(),
      'lineName' => array(),
      'supplierName' => array(),
      'price' => array(),
      'tax' => array(),
      'discountPrice' => array(),
      'state' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'code' => array(),
      'productRef' => array(),
      'name' => array(),
      'unit' => array(),
      'currencySymbol' => array(),
      'description' => array(),
      'idBrand' => array(),
      'brand' => array(),
      'idCategory' => array(),
      'categoryName' => array(),
      'idSubcategory' => array(),
      'subcategoryName' => array(),
      'idLine' => array(),
      'lineName' => array(),
      'supplierName' => array(),
      'price' => array(),
      'tax' => array(),
      'discountPrice' => array(),
      'state' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'code' => array(),
      'productRef' => array(),
      'name' => array(),
      'unit' => array(),
      'currencySymbol' => array(),
      'description' => array(),
      'idBrand' => array(),
      'brand' => array(),
      'idCategory' => array(),
      'categoryName' => array(),
      'idSubcategory' => array(),
      'subcategoryName' => array(),
      'idLine' => array(),
      'lineName' => array(),
      'supplierName' => array(),
      'price' => array(),
      'tax' => array(),
      'discountPrice' => array(),
      'state' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'code' => array(),
      'productRef' => array(),
      'name' => array(),
      'unit' => array(),
      'currencySymbol' => array(),
      'description' => array(),
      'idBrand' => array(),
      'brand' => array(),
      'idCategory' => array(),
      'categoryName' => array(),
      'idSubcategory' => array(),
      'subcategoryName' => array(),
      'idLine' => array(),
      'lineName' => array(),
      'supplierName' => array(),
      'price' => array(),
      'tax' => array(),
      'discountPrice' => array(),
      'state' => array(),
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
    return 'ProductoForm';
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
    return 'ProductoFormFilter';
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
    return array('id', 'asc');
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
