<?php


namespace App\models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $fillable = ['name', 'price', 'address', 'description', 'property_type_id', 'agent_id', 'bedrooms', 'bathrooms', 'size', 'rooms', 'image_path', 'lat', 'lng'];
    protected $dates = ['deleted_at'];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
}