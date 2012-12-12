<td colspan="6">
  <?php echo __('%%id%% - %%name%% - %%summary%% - %%premiere_date%% - %%photo%% - %%slug%%', array('%%id%%' => link_to($Pelicula->getId(), 'pelicula_edit', $Pelicula), '%%name%%' => $Pelicula->getName(), '%%summary%%' => $Pelicula->getSummary(), '%%premiere_date%%' => false !== strtotime($Pelicula->getPremiereDate()) ? format_date($Pelicula->getPremiereDate(), "f") : '&nbsp;', '%%photo%%' => $Pelicula->getPhoto(), '%%slug%%' => $Pelicula->getSlug()), 'messages') ?>
</td>
