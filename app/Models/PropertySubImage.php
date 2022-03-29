<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertySubImage extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static $subImageObject;

    public static function saveSubImages($subImageArray, $propertyId)
    {
        foreach ($subImageArray as $subImage)
        {
            self::$subImageObject = new PropertySubImage();
            self::$subImageObject->property_id = $propertyId;
            self::$subImageObject->big_img_url = saveImage($subImage, 'admin-assets/img/property-sub-images/big/');
//            self::$subImageObject->small_img_url = saveImage($subImage, 'admin-assets/img/property-sub-images/small/');
            self::$subImageObject->save();
        }
    }
}
