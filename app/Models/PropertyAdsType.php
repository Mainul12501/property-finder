<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAdsType extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $propertyAdsType;

    public static function saveData ($request)
    {
        self::$propertyAdsType = new PropertyAdsType();
        self::$propertyAdsType->type_name   = $request->type_name;
        self::$propertyAdsType->save();
    }

    public static function updateData($request, $id)
    {
        self::$propertyAdsType = PropertyAdsType::findOrFail($id);
        self::$propertyAdsType->type_name   = $request->type_name;
        self::$propertyAdsType->save();
    }
}
