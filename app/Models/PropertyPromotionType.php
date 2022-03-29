<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPromotionType extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $propertyPromotionType;

    public static function saveData ($request)
    {
        self::$propertyPromotionType = new PropertyPromotionType();
        self::$propertyPromotionType->name   = $request->name;
        self::$propertyPromotionType->save();
    }

    public static function updateData($request, $id)
    {
        self::$propertyPromotionType = PropertyPromotionType::findOrFail($id);
        self::$propertyPromotionType->name   = $request->name;
        self::$propertyPromotionType->save();
    }

    public function property()
    {
        return $this->hasMany(Property::class);
    }
}
