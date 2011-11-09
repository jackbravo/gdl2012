<?php
/**
 * implementation of hook_panels_layouts
 */
// Plugin definition
$plugin = array(
  'title' => t('Gdl2012 lite'),
  'category' => t('Columns: 3'),
  'icon' => 'gdl2012-lite-home.png',
  'theme' => 'gdl2012-lite-home',
  'theme arguments' => array('id', 'content'),
  'css' => 'gdl2012-lite-home.css',
  'panels' => array(
    'main'      => t('Main column'),
    'title'     => t('Main Titlte'),
    'right'     => t('Right side'),
    'left'      => t('Left side')
  ),
);

