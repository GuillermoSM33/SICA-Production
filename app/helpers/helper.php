<?php

if (!function_exists('cleanFileName')) {
    function cleanFileName($fileName)
    {
        $cleanName = preg_replace('/^\d+_/', '', $fileName);
        $cleanName = preg_replace('/\.pdf$/', '', $cleanName);
        return $cleanName;
    }
}
