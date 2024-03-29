<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
    protected $fillable = ['url', 'imageable_id', 'imageable_type'];
    protected $dates = ['deleted_at'];
    // This relation returns the images owners
    public function imageable() {
        return $this->morphTo();
    }
}
