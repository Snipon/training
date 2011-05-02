<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function training_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['training'] = array(
    '#type' => 'checkbox',
    '#title' => t('Make happy!'),
    '#default_value' => theme_get_setting('training'),
    '#description' => t('Make the theme a bit more happy.'),
    // Place this above the color scheme options.
    '#weight' => -1,
  );
}