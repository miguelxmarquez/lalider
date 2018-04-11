<?php

class IntegratorClient extends sfBaseTask
{
  public function configure()
  {
    $this->namespace = 'integrator';
    $this->name      = 'client';
    $this->addArgument('path', sfCommandArgument::OPTIONAL, 'Indique la ruta del archivo a importar', null);
    $this->briefDescription    = 'Integrador Clientes InData';

    $this->detailedDescription = <<<EOF
    La tarea [say:hello|INFO] es una implementación del clásico ejemplo
    Hola Mundo utilizando el sistema de tareas de Symfony.

      [./symfony say:hello|INFO]

    Puedes utilizar esta misma tarea para saludar a alguien mediante el
    argumento [--who|COMMENT].
    EOF;

  }

  public function execute($arguments = array(), $options = array())
  {
    $this->logSection('IntegratorClient:', 'Importando Archivo Clientes '.$arguments['path']);


  }
}
