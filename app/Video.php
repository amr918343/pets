<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'url',
        'pet_id',
    ];
    protected $dates = ['deleted_at'];

    // one pet has many videos
    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
