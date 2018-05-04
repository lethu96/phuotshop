<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table = 'type_product';
    public $timestamps = false;

    public static function getCategoryLitmit()
    {
        $category = self::find()
            ->andWhere(['status' => 0])
            ->orderBy(['id' => SORT_DESC ])
            ->limit(3)
            ->all();
        $array = [];
        foreach ($category as $key => $value) {
            $array[$key] = $value->id;
        }
        return $array;
    }
}
