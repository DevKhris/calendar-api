<?php

namespace App\Models\Calendar;

use App\Models\Calendar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayDisabled extends Model
{
    use HasFactory;

    protected $fillable = [
        'calendar_id',
        'day',
        'enabled'
    ];

    protected $table = 'disabled_days';

    public function calendar()
    {
        return $this->belongsTo(Calendar::class, 'calendar_id', 'id');
    }
}
