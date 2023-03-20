<?php

namespace App\Http\Lib\Helper;

class Helper
{
    public static function searchField($query, $field, $value)
    {
        if ($value && $field) {
            $query->where($field, $value);
        }

        return $query
    }
}
