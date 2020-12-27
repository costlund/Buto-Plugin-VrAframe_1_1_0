<?php
class PluginVrAframe_1_1_0{
  function __construct() {
    wfPlugin::includeonce('wf/yml');
    wfPlugin::includeonce('wf/array');
  }
  public function widget_include($data){
    $element = array();
    wfPlugin::enable('include/js');
    $element[] = wfDocument::createWidget('include/js', 'include', array('src' => '/plugin/vr/aframe_1_1_0/aframe-v1.1.0.js'));    
    wfDocument::renderElement($element);
  }
  public function widget_gltf($data){
    $data = new PluginWfArray($data);
    $element = new PluginWfYml(__DIR__."/scene/gltf.yml");
    $element->setByTag($data->get('data'));
    wfDocument::renderElement($element->get());
  }
}
