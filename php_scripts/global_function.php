<?php

function getParams($data, $params)
{
    $output = '';
    $prefix = '?' .date("d-H-i-s");
    if (!isset($data[$params])){
        return '';
    }
    foreach ($data[$params] as $datum) {
        $eco = '';
        switch ($params) {
            case 'css':
                $eco = '<link rel="stylesheet" href="' . $datum . $prefix . '">';
                break;
            case 'js':
                $eco = '<script src="' . $datum . $prefix . '"></script>';
                break;
        }
        $output .= $eco;
    }
    return $output;
}
