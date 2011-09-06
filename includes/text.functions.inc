<?php
/**
 * @file
 * Custom functions.
 */

function clean_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    $output = implode(' ... ', $breadcrumb);
    return $output;
  }
}
