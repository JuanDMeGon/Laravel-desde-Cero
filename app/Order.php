<?php

namespace App;

use App\Payment;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
