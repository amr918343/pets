<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'body',
        'pet_id',
    ];
    protected $dates = ['deleted_at'];

    // one pet has many comments
    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
