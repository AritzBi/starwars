<td colspan="5">
  <?php echo __('%%id%% - %%name%% - %%summary%% - %%raza%% - %%photo%%', array('%%id%%' => link_to($Personaje->getId(), 'personaje_edit', $Personaje), '%%name%%' => link_to($Personaje->getName(), 'personaje_edit', $Personaje), '%%summary%%' => link_to($Personaje->getSummary(), 'personaje_edit', $Personaje), '%%raza%%' => link_to($Personaje->getRaza(), 'personaje_edit', $Personaje), '%%photo%%' => link_to($Personaje->getPhoto(), 'personaje_edit', $Personaje)), 'messages') ?>
</td>
