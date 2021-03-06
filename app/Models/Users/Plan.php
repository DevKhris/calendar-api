<?php

namespace App\Models\Users;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Plan extends Model
{
    use HasFactory;

    public $table = "user_plans";

    protected $fillable = [
        'user_id',
        'currency_id',
        'next_user_plan_id',
        'start_timestamp',
        'end_timestamp',
        'renewal_timestamp',
        'renewal_price',
        'requires_invoice',
        'status',
        'created',
        'modified',
        'status_financiation',
        'financiation',
        'language',
        'nif',
        'business_name',
        'pending_payment',
        'proxim_start_timestamp',
        'proxim_end_timestamp',
        'proxim_renewal_timestamp',
        'proxim_renewal_price',
        'credits_return',
        'company_id',
        'cancel_employee',
        'force_renovation',
        'date_canceled',
        'amount_confirm_canceled',
        'credit_confirm_canceled',
        'cost_center_id',
    ];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'modified';

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'user_plan_id','id');
    }
}
