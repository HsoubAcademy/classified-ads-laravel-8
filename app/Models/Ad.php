<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Ad extends Model
{
    protected $fillable= ['title','slug','text','price','user_id','category_id','country_id','currency_id'];

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->where('parent_id',Null);
    }

    public function currency()
    {
        return $this->belongsTo('App\Models\Currency');
    }

    public function scopeFilter($query, Request $request)
    {
        if ($request->country) {
            $query->whereCountry_id($request->country);
        }

        if ($request->category) {
            $query->whereCategory_id($request->category);
        }

        if ($request->keyword) {
            $query->where('title', 'LIKE', '%'.$request->keyword.'%');
        }

        return $query->get();
    }

    public function setSlugAttribute($value)
    {
        $slug=\Helper::slug($value); 

        $uniqueSlug=\Helper::uniqueSlug($slug,'ads');

        $this->attributes['slug'] = $uniqueSlug;
    }

}
