<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    const AVAILABLE_PET = 'available',
        UNAVAILABLE_PET = 'unavailable';

    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'seller_id',
    ];
    protected $dates = ['deleted_at'];

    /*
     * helper Functions
     */

    // Check pet availability
    public function isAvailable() {
        return $this->status == self::AVAILABLE_PET;
    }

    // Check countability
    public function countable() {
        return $this->quantity > 1;
    }


    /*
     * Relations
     */


    // user morph many images
    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }

    // Many pets belongs to 1 seller

    public function seller() {
        return $this->belongsTo(Seller::class);
    }

    // One pet has many transactions
    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    // Many pet has many categories
    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    // One pet has man comments
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // One pet has man videos
    public function vidoes() {
        return $this->hasMany(Video::class);
    }
}
