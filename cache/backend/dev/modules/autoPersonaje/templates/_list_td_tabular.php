<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Personaje->getId(), 'personaje_edit', $Personaje) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo link_to($Personaje->getName(), 'personaje_edit', $Personaje) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_summary">
  <?php echo link_to($Personaje->getSummary(), 'personaje_edit', $Personaje) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_raza">
  <?php echo link_to($Personaje->getRaza(), 'personaje_edit', $Personaje) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_photo">
  <?php echo link_to($Personaje->getPhoto(), 'personaje_edit', $Personaje) ?>
</td>
