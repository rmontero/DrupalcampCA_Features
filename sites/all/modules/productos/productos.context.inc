<?php

/**
 * Implementation of hook_context_default_contexts().
 */
function productos_context_default_contexts() {
  $export = array();
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'productos';
  $context->description = 'Productos';
  $context->tag = 'Productos';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'products' => 'products',
      ),
      'options' => array(
        'node_form' => '1',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-Productos-block_1' => array(
          'module' => 'views',
          'delta' => 'Productos-block_1',
          'region' => 'right',
          'weight' => 0,
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Productos');

  $export['productos'] = $context;
  return $export;
}
