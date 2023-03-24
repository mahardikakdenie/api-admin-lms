<?php

namespace App\Http\Lib;

class Helper
{
    public static function searchField($query, $field, $value)
    {
        if ($value && $field) {
            $query->where($field, $value);
        }

        return $query;
    }

    public static function entities($query, $entities)
    {
        if ($entities != null || $entities != '') {
            $entities = str_replace(' ', '', $entities);
            $entities = explode(',', $entities);

            try {
                return $query = $query->with($entities);
            } catch (\Throwable $th) {
                return Json::exception(null, validator()->errors());
            }
        }
    }
}
