<?php


namespace App\models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $fillable = ['name', 'surname', 'job_title', 'email', 'phone_number', 'image_path'];
    protected $dates = ['deleted_at'];
}