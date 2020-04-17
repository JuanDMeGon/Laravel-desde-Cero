<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount',
        'payed_at',
        'order_id',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'payed_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
