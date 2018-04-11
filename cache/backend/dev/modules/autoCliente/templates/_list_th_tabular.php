<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_identification">
  <?php if ('identification' == $sort[0]): ?>
    <?php echo link_to(__('NIT', array(), 'messages'), '@cliente', array('query_string' => 'sort=identification&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('NIT', array(), 'messages'), '@cliente', array('query_string' => 'sort=identification&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_businessName">
  <?php if ('businessName' == $sort[0]): ?>
    <?php echo link_to(__('Razon Social', array(), 'messages'), '@cliente', array('query_string' => 'sort=businessName&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Razon Social', array(), 'messages'), '@cliente', array('query_string' => 'sort=businessName&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_credit">
  <?php if ('credit' == $sort[0]): ?>
    <?php echo link_to(__('Credito', array(), 'messages'), '@cliente', array('query_string' => 'sort=credit&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Credito', array(), 'messages'), '@cliente', array('query_string' => 'sort=credit&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_avalilableCredit">
  <?php if ('avalilableCredit' == $sort[0]): ?>
    <?php echo link_to(__('Credito Disponible', array(), 'messages'), '@cliente', array('query_string' => 'sort=avalilableCredit&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Credito Disponible', array(), 'messages'), '@cliente', array('query_string' => 'sort=avalilableCredit&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_boolean sf_admin_list_th_state">
  <?php if ('state' == $sort[0]): ?>
    <?php echo link_to(__('Estado', array(), 'messages'), '@cliente', array('query_string' => 'sort=state&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Estado', array(), 'messages'), '@cliente', array('query_string' => 'sort=state&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_boolean sf_admin_list_th_isBlocked">
  <?php if ('isBlocked' == $sort[0]): ?>
    <?php echo link_to(__('Bloqueado', array(), 'messages'), '@cliente', array('query_string' => 'sort=isBlocked&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Bloqueado', array(), 'messages'), '@cliente', array('query_string' => 'sort=isBlocked&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>