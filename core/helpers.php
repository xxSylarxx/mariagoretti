<?php

class Helpers
{
    public static function formatDate($datsql)
    {
        return date('d-m-Y', strtotime($datsql));
    }

    public static function formatSlug($str)
    {
        return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($str, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    }

    public static function makePassHash($pass)
    {
        return password_hash($pass, PASSWORD_DEFAULT);
    }

    public static function cleanString($str)
    {
        $str = preg_replace(['/\s+/', '/^\s|\s$/'], [' ', ''], $str);
        $str = trim($str);
        $str = stripslashes($str);
        $str = str_ireplace("--", "", $str);
        $str = str_ireplace("^", "", $str);
        $str = str_ireplace("[", "", $str);
        $str = str_ireplace("]", "", $str);
        $str = str_ireplace("==", "", $str);
        return $str;
    }
}
