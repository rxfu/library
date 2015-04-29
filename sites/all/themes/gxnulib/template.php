<?php

/**
 * Clear theme cache immediately.
 */
drupal_theme_rebuild();
db_query("DELETE FROM {cache};");

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * gxnulib theme.
 */
function gxnulib_omega_layout_alter(&$layout) {
  if (drupal_is_front_page()) {
    $layout .= '-front';
  }
}

/**
 * Alter the entity info.
 *
 * Modules may implement this hook to alter the information that defines an
 * entity. All properties that are available in hook_entity_info() can be
 * altered here.
 *
 * @param $entity_info
 *   The entity info array, keyed by entity name.
 *
 * @see hook_entity_info()
 */
function gxnulib_entity_info_alter(&$entity_info) {
  // Set the controller class for nodes to an alternate implementation of the
  // DrupalEntityController interface.
  $entity_info['node']['view modes']['list_node'] = array(
    'label' => t('List'),
    'custom settings' => TRUE,
  );
}
