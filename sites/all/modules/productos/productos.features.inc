<?php

/**
 * Implementation of hook_node_info().
 */
function productos_node_info() {
  $items = array(
    'products' => array(
      'name' => t('Productos'),
      'module' => 'features',
      'description' => t('Esto es un tipo de contenido'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function productos_views_api() {
  return array(
    'api' => '3.0-alpha1',
  );
}