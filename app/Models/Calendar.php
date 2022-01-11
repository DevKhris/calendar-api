<?php

namespace App\Models;

use App\Models\Calendar\DayDisabled;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'calendar_id',
        'name'
    ];

    public function disabledDays()
    {
        return $this->hasMany(DayDisabled::class,'calendar_id', 'id');
    }
}
