<?php use_helper('I18N', 'Date') ?>
<?php include_partial('personaje/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editando %%name%%', array('%%name%%' => $Personaje->getName()), 'messages') ?></h1>

  <?php include_partial('personaje/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('personaje/form_header', array('Personaje' => $Personaje, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('personaje/form', array('Personaje' => $Personaje, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('personaje/form_footer', array('Personaje' => $Personaje, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
