<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $fillable = ['name', 'city', 'phone'];

    public function city() {
        return $this->belongsTo('App\City', 'city_slug', 'slug');
    }

    public function user() {
        return $this->morphOne('App\User', 'profile');
    }
}
