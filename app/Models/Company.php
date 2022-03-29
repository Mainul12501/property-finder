<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $company;
    protected static $image;

    public static function saveData ($request)
    {
        self::$image = $request->file('logo_image');

        self::$company                      = new Company();
        self::$company->name                = $request->name;
        self::$company->phone_number        = $request->phone_number;
        self::$company->email               = $request->email;
        self::$company->big_logo_image      = saveImage(self::$image, 'admin-assets/img/companies/big/');
//        self::$company->small_logo_image    = saveImage(self::$image, 'admin-assets/img/companies/small/');
        self::$company->head_office_area    = $request->head_office_area;
        self::$company->head_office_city    = $request->head_office_city;
        self::$company->head_office_state   = $request->head_office_state;
        self::$company->orn                 = $request->orn;
        self::$company->location            = $request->location;
        self::$company->location_map_url    = $request->location_map_url;
        self::$company->about_office        = $request->about_office;
        self::$company->fb_url              = $request->fb_url;
        self::$company->whatsapp_number     = $request->whatsapp_number;
        self::$company->save();
    }

    public static function updateData($request, $id)
    {
        self::$image = $request->file('logo_image');

        self::$company = Company::findOrFail($id);
        self::$company->name                = $request->name;
        self::$company->phone_number        = $request->phone_number;
        self::$company->email               = $request->email;
        self::$company->big_logo_image      = saveImage(self::$image, 'admin-assets/img/companies/big/', self::$company->big_logo_image);
//        self::$company->small_logo_image    = saveImage(self::$image, 'admin-assets/img/companies/small/', self::$company->small_logo_image);
        self::$company->head_office_area    = $request->head_office_area;
        self::$company->head_office_city    = $request->head_office_city;
        self::$company->head_office_state   = $request->head_office_state;
        self::$company->orn                 = $request->orn;
        self::$company->location            = $request->location;
        self::$company->location_map_url    = $request->location_map_url;
        self::$company->about_office        = $request->about_office;
        self::$company->fb_url              = $request->fb_url;
        self::$company->whatsapp_number     = $request->whatsapp_number;
        self::$company->save();
    }

    public function agents ()
    {
        return $this->hasMany(Agent::class);
    }

    public function properties ()
    {
        return $this->hasMany(Property::class);
    }
}
