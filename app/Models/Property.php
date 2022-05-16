<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Stripe;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $property;
    protected static $propertySubImages;

    public static function saveData ($request)
    {

        self::$property                                 = new Property();
        self::$property->company_id                     = $request->company_id;
        self::$property->agent_id                       = $request->agent_id;
        self::$property->property_type_id               = $request->property_type_id;
        self::$property->property_ads_type_id           = $request->property_ads_type_id;
        self::$property->property_promotion_type_id     = $request->property_promotion_type_id;
        self::$property->property_title                 = $request->property_title;
        self::$property->property_size                  = $request->property_size;
        self::$property->bedrooms                       = $request->bedrooms;
        self::$property->bathrooms                      = $request->bathrooms;
        self::$property->parking                        = $request->parking;
        self::$property->property_price                 = $request->property_price;
        self::$property->yearly_service_charge          = $request->yearly_service_charge;
        self::$property->rent_charge_per_year           = $request->rent_charge_per_year;
        self::$property->property_interest_rate         = $request->property_interest_rate;
        self::$property->location_area                  = $request->location_area;
        self::$property->location_city                  = $request->location_city;
        self::$property->location_country               = $request->location_country;
        self::$property->property_completion            = $request->property_completion;
        self::$property->is_furnished                   = $request->is_furnished;
        self::$property->is_verified                    = $request->is_verified;
        self::$property->main_image                     = saveImage($request->file('main_image'), 'admin-assets/img/properties/');
        self::$property->lat                            = $request->lat;
        self::$property->lon                            = $request->lon;
        self::$property->property_map_url               = $request->property_map_url;
        self::$property->property_description           = $request->property_description;
        self::$property->property_video_url             = $request->property_video_url;
        if ($request->file('panoramic_360_view'))
        {
            self::$property->panoramic_360_view             = saveImage($request->file('panoramic_360_view'),'./admin-assets/img/property-360/');
        }
        self::$property->updated_by                     = Auth::id();
        self::$property->slug                           = str_replace(' ', '-', $request->property_title);
        self::$property->save();

        if ($request->file('sub_images'))
        {
            PropertySubImage::saveSubImages($request->file('sub_images'), self::$property->id);
        }
    }

    public static function updateData($request, $id)
    {
        self::$property = Property::findOrFail($id);
        self::$property->company_id                     = $request->company_id;
        self::$property->agent_id                       = $request->agent_id;
        self::$property->property_type_id               = $request->property_type_id;
        self::$property->property_ads_type_id           = $request->property_ads_type_id;
        self::$property->property_promotion_type_id     = $request->property_promotion_type_id;
        self::$property->property_title                 = $request->property_title;
        self::$property->property_size                  = $request->property_size;
        self::$property->bedrooms                       = $request->bedrooms;
        self::$property->bathrooms                      = $request->bathrooms;
        self::$property->parking                        = $request->parking;
        self::$property->property_price                 = $request->property_price;
        self::$property->yearly_service_charge          = $request->yearly_service_charge;
        self::$property->rent_charge_per_year           = $request->rent_charge_per_year;
        self::$property->property_interest_rate         = $request->property_interest_rate;
        self::$property->location_area                  = $request->location_area;
        self::$property->location_city                  = $request->location_city;
        self::$property->location_country               = $request->location_country;
        self::$property->property_completion            = $request->property_completion;
        self::$property->is_furnished                   = $request->is_furnished;
        self::$property->is_verified                    = $request->is_verified;
        self::$property->main_image                     = saveImage($request->file('main_image'), './admin-assets/img/properties/', self::$property->main_image);
        self::$property->lat                            = $request->lat;
        self::$property->lon                            = $request->lon;
        self::$property->property_map_url               = $request->property_map_url;
        self::$property->property_description           = $request->property_description;
        self::$property->property_video_url             = $request->property_video_url;
        if ($request->file('panoramic_360_view'))
        {
            self::$property->panoramic_360_view         = saveImage($request->file('panoramic_360_view'),'./admin-assets/img/property-360/');
        }
        self::$property->updated_by                     = Auth::id();
        self::$property->slug                           = str_replace(' ', '-', $request->property_title);
        self::$property->save();

        if ($request->file('sub_images'))
        {
            self::$propertySubImages = PropertySubImage::where('property_id', $id)->get();
            foreach (self::$propertySubImages as $propertySubImage) {
                if (file_exists($propertySubImage->big_img_url))
                {
                    unlink($propertySubImage->big_img_url);
                }
                if (file_exists($propertySubImage->small_img_url))
                {
                    unlink($propertySubImage->small_img_url);
                }
                $propertySubImage->delete();
            }
            PropertySubImage::saveSubImages($request->file('sub_images'), self::$property->id);
        }
    }

    public function company ()
    {
        return $this->belongsTo(Company::class);
    }
    public function agent ()
    {
        return $this->belongsTo(Agent::class);
    }
    public function propertyType ()
    {
        return $this->belongsTo(PropertyType::class);
    }
    public function propertyPromotionType ()
    {
        return $this->belongsTo(PropertyPromotionType::class);
    }
    public function propertyAdsType ()
    {
        return $this->belongsTo(PropertyAdsType::class);
    }
    public function subImages ()
    {
        return $this->hasMany(PropertySubImage::class);
    }
}
