<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';

# Composer Require
require_once __DIR__.'/../vendor/autoload.php';

sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');

    $this->dispatcher->connect('debug.web.load_panels', array(
    'acWebDebugPanelDocumentation',
    'listenToLoadDebugWebPanelEvent'
    ));

  }
}
