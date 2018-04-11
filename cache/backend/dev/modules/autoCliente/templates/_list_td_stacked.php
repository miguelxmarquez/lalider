<td colspan="6">
  <?php echo __('%%identification%% - %%businessName%% - %%credit%% - %%avalilableCredit%% - %%state%% - %%isBlocked%%', array('%%identification%%' => $Cliente->getIdentification(), '%%businessName%%' => $Cliente->getBusinessName(), '%%credit%%' => $Cliente->getCredit(), '%%avalilableCredit%%' => $Cliente->getAvalilableCredit(), '%%state%%' => get_partial('cliente/list_field_boolean', array('value' => $Cliente->getState())), '%%isBlocked%%' => get_partial('cliente/list_field_boolean', array('value' => $Cliente->getIsBlocked()))), 'messages') ?>
</td>
