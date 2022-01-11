<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'external_budget_id',
        'external_route_id',
        'track_id',
        'name',
        'notes',
        'timestamp',
        'arrival_address',
        'arrival_timestamp',
        'departure_address',
        'departure_timestamp',
        'capacity',
        'confirmed_pax_count',
        'reported_departure_timestamp',
        'reported_departure_kms',
        'reported_arrival_timestamp',
        'reported_arrival_kms',
        'reported_vehicle_plate_number',
        'status',
        'status_info',
        'reprocess_status',
        'return',
        'created',
        'modified',
        'synchronized_downstream',
        'synchronized_upstream',
        'province_id',
        'sale_tickets_drivers',
        'notes_drivers',
        'itinerary_drivers',
        'cost_if_externalized',
    ];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'modified';
}
