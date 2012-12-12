<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Pelicula->getId(), 'pelicula_edit', $Pelicula) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $Pelicula->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_summary">
  <?php echo $Pelicula->getSummary() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_premiere_date">
  <?php echo false !== strtotime($Pelicula->getPremiereDate()) ? format_date($Pelicula->getPremiereDate(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_photo">
  <?php echo $Pelicula->getPhoto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $Pelicula->getSlug() ?>
</td>
