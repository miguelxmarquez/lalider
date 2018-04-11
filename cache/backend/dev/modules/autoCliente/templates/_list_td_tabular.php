<td class="sf_admin_text sf_admin_list_td_identification">
  <?php echo $Cliente->getIdentification() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_businessName">
  <?php echo $Cliente->getBusinessName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_credit">
  <?php echo $Cliente->getCredit() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_avalilableCredit">
  <?php echo $Cliente->getAvalilableCredit() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_state">
  <?php echo get_partial('cliente/list_field_boolean', array('value' => $Cliente->getState())) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_isBlocked">
  <?php echo get_partial('cliente/list_field_boolean', array('value' => $Cliente->getIsBlocked())) ?>
</td>
