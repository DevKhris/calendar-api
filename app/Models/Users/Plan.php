<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
