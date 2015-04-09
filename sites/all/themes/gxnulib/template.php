<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * gxnulib theme.
 */
function gxnulib_omega_layout_alter(&$layout) {
  if (drupal_is_front_page()) {
    $layout = 'library';
  }
}