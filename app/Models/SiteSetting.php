<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static $siteSetting;

    public static function saveData ($request)
    {
        self::$siteSetting = new SiteSetting();
        self::$siteSetting->site_title              = $request->site_title;
        self::$siteSetting->site_name               = $request->site_name;
        self::$siteSetting->site_meta               = $request->site_meta;
        self::$siteSetting->site_logo               = saveImage($request->file('site_logo'), './admin-assets/img/settings/');
        self::$siteSetting->site_banner             = saveImage($request->file('site_banner'), './admin-assets/img/settings/');
        self::$siteSetting->payment_amount          = $request->payment_amount;
        self::$siteSetting->save();
    }

    public static function updateData($request, $id)
    {
        self::$siteSetting = SiteSetting::findOrFail($id);
        self::$siteSetting->site_title              = $request->site_title;
        self::$siteSetting->site_name               = $request->site_name;
        self::$siteSetting->site_meta               = $request->site_meta;
        self::$siteSetting->site_logo               = saveImage($request->file('site_logo'), './admin-assets/img/settings/', self::$siteSetting->site_logo);
        self::$siteSetting->site_banner             = saveImage($request->file('site_banner'), './admin-assets/img/settings/', self::$siteSetting->site_banner);
        self::$siteSetting->payment_amount          = $request->payment_amount;
        self::$siteSetting->save();
    }
}
