<?php

/**
 * @file
 * Contains a pre-process hook for 'node'.
 */

/**
 * Implements hook_preprocess_node().
 */
function gxnulib_preprocess_node(&$variables) {
  if ($variables['view_mode'] == 'list_node') {
    $variables['theme_hook_suggestions'][] = 'node__list';
  }
}
