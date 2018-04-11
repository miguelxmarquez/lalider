<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Producto->getId(), 'producto_edit', $Producto) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_code">
  <?php echo $Producto->getCode() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_productRef">
  <?php echo $Producto->getProductRef() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $Producto->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_unit">
  <?php echo $Producto->getUnit() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_brand">
  <?php echo $Producto->getBrand() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_price">
  <?php echo $Producto->getPrice() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tax">
  <?php echo $Producto->getTax() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_discountPrice">
  <?php echo $Producto->getDiscountPrice() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_state">
  <?php echo get_partial('producto/list_field_boolean', array('value' => $Producto->getState())) ?>
</td>
