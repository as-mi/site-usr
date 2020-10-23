<?php
session_start();
/**
 * Get existing csrf token or generate a new one
 * Use CSRF in any form which can be exploited.
 */
function get_csrf_token() {
    if(!isset($_SESSION["csrf_token"])) {
        $bytes = openssl_random_pseudo_bytes(32);
        $hex   = bin2hex($bytes);
        $_SESSION["csrf_token"] = $hex;
    } else {
        $hex = $_SESSION["csrf_token"];
    }
    return $hex;
}

/**
 * Check if the given string can be an email
 */
function isEmailValid(string $data) {
    return filter_var($data, FILTER_VALIDATE_EMAIL);
}


