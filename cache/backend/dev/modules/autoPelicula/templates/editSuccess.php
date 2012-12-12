<?php use_helper('I18N', 'Date') ?>
<?php include_partial('pelicula/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editando %%name%%', array('%%name%%' => $Pelicula->getName()), 'messages') ?></h1>

  <?php include_partial('pelicula/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('pelicula/form_header', array('Pelicula' => $Pelicula, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('pelicula/form', array('Pelicula' => $Pelicula, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('pelicula/form_footer', array('Pelicula' => $Pelicula, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
