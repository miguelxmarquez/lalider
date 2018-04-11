<?php

/**
 * producto module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage producto
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProductoGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'producto' : 'producto_'.$action;
  }
}
