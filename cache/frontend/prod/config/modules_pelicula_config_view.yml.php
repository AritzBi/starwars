<?php
// auto-generated by sfViewConfigHandler
// date: 2012/12/12 18:15:24
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('jquery-ui-1.9.2.custom.css', '', array ());
  $response->addStylesheet('anythingslider.css', '', array ());
  $response->addStylesheet('theme-cs-portfolio.css', '', array ());
  $response->addStylesheet('theme-minimalist-round.css', '', array ());
  $response->addStylesheet('animate.css', '', array ());
  $response->addStylesheet('theme-construction.css', '', array ());
  $response->addStylesheet('theme-metallic.css', '', array ());
  $response->addStylesheet('theme-minimalist-square.css', '', array ());
  $response->addJavascript('jquery-1.8.3.js', '', array ());
  $response->addJavascript('jquery-ui-1.9.2.custom.js', '', array ());
  $response->addJavascript('jquery.anythingslider.fx.js', '', array ());
  $response->addJavascript('jquery.anythingslider.js', '', array ());
  $response->addJavascript('jquery.anythingslider.video.js', '', array ());
  $response->addJavascript('jquery.easing.1.2.js', '', array ());
  $response->addJavascript('swfobject.js', '', array ());
  $response->addJavascript('myjs.js', '', array ());


