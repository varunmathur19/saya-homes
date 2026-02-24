<?php
// This function now just trims and sanitizes string input — escaping is not needed with PDO + prepared statements
function get_safe_value($str) {
    if ($str !== '') {
        return trim(filter_var($str, FILTER_SANITIZE_STRING));
    }
    return '';
}

// Creates a slug (URL-friendly string)
function clean($string) {
    $string = str_replace(' ', '-', $string); // Replace spaces with hyphens
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Remove special characters
    $string = strtolower($string); // To lowercase
    return $string;
}