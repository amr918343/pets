<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'quantity',
        'buyer_id',
        'pet_id',
    ];
    protected $dates = ['deleted_at'];

    // one transaction has one buyer
    public function buyer() {
        return $this->belongsTo(Buyer::class);
    }

    // one transaction has one pet
    public function pet() {
        return $this->belongsTo(Pet::class);
    }


}
