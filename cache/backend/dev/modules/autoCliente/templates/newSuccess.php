<?php use_helper('I18N', 'Date') ?>
<?php include_partial('cliente/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nuevo Cliente', array(), 'messages') ?></h1>

  <?php include_partial('cliente/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('cliente/form_header', array('Cliente' => $Cliente, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('cliente/form', array('Cliente' => $Cliente, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('cliente/form_footer', array('Cliente' => $Cliente, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
