<?php

namespace App;

class Buyer extends User
{
    //  Buyer hasn many transactions
    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
