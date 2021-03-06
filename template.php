<?php

/**
 * @file
 * Functions that configure Va'jeh Theme.
 */

function vajeh_preprocess_node(&$variables) {

}

function vajeh_preprocess_page(&$variables) {

}

function vajeh_preprocess_username(&$variables) {
    $account = user_load($variables['account']->uid);
    if (isset($account->field_real_name[LANGUAGE_NONE]['0']['safe_value'])) {
        $variables['name'] = $account->field_real_name[LANGUAGE_NONE]['0']['safe_value'];
    }
    #kpr($variables);
}

function vajeh_field__field_tags($variables) {
    $output = '';
    $links = array();
    foreach ($variables['items'] as $delta => $item) {
        $links[] = drupal_render($item);
    }
    $output .= implode(', ', $links);
    $variables['tags'] = "$output";
    #kpr($variables);
    return $output;
}

?>
