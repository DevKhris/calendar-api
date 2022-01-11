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
}
