<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
    ];
    protected $dates = ['deleted_at'];

    // Many categories has many pets
    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
