<?php
//Some usefull functions

//Return base url
function baseUrl()
{
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME']
    );
}

// Page redirect
function redirect($url) {
    header('location: ' . URLROOT . '/' . $url);
}