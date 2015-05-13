<?php

/**
 * @file
 * Contians a pre-process hook for 'views-view'.
 */

/**
 * Implements template_preprocess_views_view().
 */
function gxnulib_preprocess_views_view(&$vars) {
  $view = $vars['view'];
  $vars['title'] = !empty($view->views_ui_context) ? filter_xss_admin($view->get_title()) : filter_xss($view->get_title());
}


