<?php

if (!function_exists('getFirstNWords')) {
    function getFirstNWords($text, $n)
    {
        return implode(' ', array_slice(explode(' ', $text), 0, $n));
    }
}
