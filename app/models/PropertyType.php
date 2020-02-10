<?php


namespace App\models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyType extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $fillable = ['type'];
    protected $dates = ['deleted_at'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}