<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $propertyType;

    public static function saveData ($request)
    {
        self::$propertyType = new PropertyType();
        self::$propertyType->type_name   = $request->type_name;
        self::$propertyType->save();
    }

    public static function updateData($request, $id)
    {
        self::$propertyType = PropertyType::findOrFail($id);
        self::$propertyType->type_name   = $request->type_name;
        self::$propertyType->save();
    }

    public function property ()
    {
        return $this->hasMany(Property::class);
    }
    public function singleProperty ()
    {
        return $this->hasOne(Property::class);
    }
}
