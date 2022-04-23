<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class SEO extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static $seo;

    public static function saveData ($request)
    {
//        self::$seo = new SEO();
//        self::$seo->static_url          = $request->static_url;
//        self::$seo->url_type            = $request->url_type;
//        self::$seo->property_id         = $request->property_id;
//        self::$seo->blog_id             = $request->blog_id;
//        self::$seo->header_content      = $request->header_content;
//        self::$seo->footer_content      = $request->footer_content;
//        self::$seo->status              = $request->status;
//        self::$seo->save();
        DB::transaction(function (){
            self::$seo = new SEO();
            self::$seo->static_url          = Input::get('static_url');
            self::$seo->url_type            = Input::get('url_type');
            self::$seo->property_id         = Input::get('property_id');
            self::$seo->blog_id             = Input::get('blog_id');
            self::$seo->header_content      = Input::get('header_content');
            self::$seo->footer_content      = Input::get('footer_content');
            self::$seo->status              = Input::get('status');
            self::$seo->save();
        });
    }

    public static function updateData($request, $id)
    {
        self::$seo = SEO::findOrFail($id);
        self::$seo->static_url          = $request->static_url;
        self::$seo->url_type            = $request->url_type;
        self::$seo->property_id         = $request->property_id;
        self::$seo->blog_id             = $request->blog_id;
        self::$seo->header_content      = $request->header_content;
        self::$seo->footer_content      = $request->footer_content;
        self::$seo->status              = $request->status;
        self::$seo->save();
    }

    public function property ()
    {
        return $this->belongsTo(Property::class);
    }
    public function blog ()
    {
        return $this->belongsTo(Blog::class);
    }
}
