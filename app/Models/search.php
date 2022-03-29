<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class search extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static $search;

    public static function saveSearch($request)
    {
        self::$search                       = new search();
        self::$search->search_text          = $request->search_text;
        self::$search->property_id          = $request->property_id;
        self::$search->property_ads_type_id = $request->property_ads_type_id;
        self::$search->property_type_id     = $request->property_type_id;
        self::$search->bedrooms             = $request->bedrooms;
        self::$search->bathrooms            = $request->bathrooms;
        self::$search->min_price            = $request->min_price;
        self::$search->max_price            = $request->max_price;
        self::$search->req_type             = $request->req_type;
        self::$search->property_size        = $request->property_size;
        self::$search->is_furnished         = $request->is_furnished;
        self::$search->is_completed         = $request->is_completed;
        self::$search->extra_content        = $request->extra_content;
        self::$search->save();
    }

    public function propertyType ()
    {
        return $this->belongsTo(PropertyType::class);
    }
}
