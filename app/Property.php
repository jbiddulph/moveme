<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $fillable = ['user_id', 'company_id', 'propname', 'slug', 'propcost', 'proptype_id', 'propimage',
        'bedroom', 'bathroom', 'kitchen', 'garage', 'reception', 'conservatory', 'outbuilding', 'address',
        'town', 'county', 'postcode', 'latitude', 'longitude', 'description', 'floorplan', 'brochure',
        'last_date', 'category_id', 'is_featured', 'is_live'];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function propertyphotos() {
        return $this->hasMany('App\PropertyPhotos');
    }
    public function users() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function checkInterest() {
        return \DB::table('property_user')->where('user_id', auth()->user()->id)
            ->where('property_id', $this->id)->exists();
    }
}
