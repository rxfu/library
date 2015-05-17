<?php

/**
 * @file
 * Defines the alter query object.
 */

/**
 * Object used to create a SELECT query.
 */
class views_contextual_filters_or_query extends views_plugin_query_default {
  function option_definition() {
    $options = parent::option_definition();

    $options['contextual_filters_or'] = array(
      'default' => FALSE,
      'translatable' => FALSE,
      'bool' => TRUE,
    );

    return $options;
  }

  /**
   * Add settings for the ui.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $form['contextual_filters_or'] = array(
      '#title' => t('Contextual filters OR'),
      '#description' => t('Contextual filters applied to OR logic.'),
      '#type' => 'checkbox',
      '#default_value' => !empty($this->options['contextual_filters_or']),
    );
  }
}
