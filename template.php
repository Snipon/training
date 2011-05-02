<?php
function training_preprocess_html(&$vars) {
  if(theme_get_setting('training') == 1) { //check if theme setting is active
    $vars['classes_array'][] = 'happy'; //add the class into the array
  }
}