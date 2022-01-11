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

    protected $appends = [
        'days',
        'available_days',
        'unavailable_days'
    ];

    public function route()
    {
        return $this->belongsTo(Route::class,'route_id','id');
    }

    public function getAvailableDaysAttribute()
    {
        $daysAvailable = [];

        foreach ($this->days as $key => $value) {
            if ($value) {
                $daysAvailable[$key] = $value;
            }
        }

        return $daysAvailable;
    }

    public function getUnavailableDaysAttribute()
    {
        $daysUnavailable = [];

        foreach ($this->days as $key => $value) {
            if (!$value) {
                $daysUnavailable[$key] = $value;
            }
        }

        return $daysUnavailable;
    }

    /**
     * Get days from model
     *
     * @return array
     */
    public function getDaysAttribute(): array
    {
        $days = [
            'mon' => $this->mon,
            'tue' => $this->tue,
            'wed' => $this->wed,
            'thu' => $this->thu,
            'fri' => $this->fri,
            'sat' => $this->sat,
            'sun' => $this->sun
        ];

        return $days;
    }
}
