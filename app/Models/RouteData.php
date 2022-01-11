<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteData extends Model
{
    use HasFactory;

    public $table = "routes_data";

    protected $fillablle = [
        'route_id',
        'calendar_id',
        'vinculation_route',
        'route_circular',
        'date_init',
        'date_finish',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
        'sun'
    ];
}
