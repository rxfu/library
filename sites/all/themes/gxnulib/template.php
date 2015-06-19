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
 * Implements hook_form_alter
 */
function gxnulib_form_alter (&$form, $form_state, $form_id) {
  $form['search_block_form']['#maxlength'] = null;
  $form['search_block_form']['#size'] = null;
  $form['search_block_form']['#attributes']['placeholder'] = t('Enter your keywords');
}