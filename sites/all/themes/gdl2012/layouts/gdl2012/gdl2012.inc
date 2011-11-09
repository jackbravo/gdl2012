<?php
/**
 * implementation of hook_panels_layouts
 */
// Plugin definition
$plugin = array(
  'title' => t('Gdl2012'),
  'category' => t('Columns: 3'),
  'icon' => 'gdl2012.png',
  'theme' => 'gdl2012-home',
  'theme arguments' => array('id', 'content'),
  'css' => 'gdl2012-home.css',
  'panels' => array(
    'main'      => t('Main column'),
    'right'     => t('Right side'),
    'sessions'  => t('Sessions'),
    'attenders' => t('Attenders'),
    'sponsors'  => t('Sponsors'),
    'infobar'   => t('Info bar')  
  ),
);

