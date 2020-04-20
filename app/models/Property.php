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
    public function transform($data)
    {
        $object = $this;
        $properties = [];
        foreach ($data as $item){
            array_push($properties, [
                'id' => $item->id,
                'price' => $item->price,
                'name' => $item->name,
                'description' => $item->description,
                'image_path' => $item->image_path
            ]);
        }
        return $properties;
    }
}