<?php

namespace App\Models;

use App\Models\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "id",
		"user_plan_id",
		"route_id",
		"track_id",
		"reservation_start",
		"reservation_end",
		"route_stop_origin_id",
		"route_stop_destination_id",
		"created_at",
		"updated_at",
		"deleted_at"
    ];

    /**
     * Get the route associated with the Reservation
     *
     */
    public function route()
    {
        return $this->hasOne(Route::class, 'id', 'route_id');
    }
}
