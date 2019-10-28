<?php

namespace App;

class Seller extends User
{
    protected $table = 'users';
    //  Seller has many pets
    public function pets() {
        return $this->hasMany(Pet::class);
    }
}
