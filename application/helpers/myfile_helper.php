<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function cek_file($file)
{
    if (empty($file)) {
        return '#';
    }

    $file_url = base_url('upload/file/' . $file);

    if (
        $_SERVER['SERVER_NAME'] == 'localhost' ||
        $_SERVER['SERVER_NAME'] == '127.0.0.1'
    ) {
        return $file_url;
    }

    return "https://docs.google.com/viewer?url=" . urlencode($file_url) . "&embedded=true";
}