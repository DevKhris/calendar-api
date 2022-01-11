<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'external_id',
        'invitation_code',
        'title',
        'start_timestamp',
        'end_timestamp',
    ];


    public function data()
    {
        return $this->hasOne(RouteData::class,'route_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'external_route_id','external_id');
    }
}
