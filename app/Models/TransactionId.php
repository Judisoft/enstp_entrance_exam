<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionId extends Model
{
    use HasFactory;
   
    protected $table = 'transaction_ids';

    protected $hidden =  [
        'transaction_id'
    ];

    public function application() {
        return $this->belongsTo(ConcourRegistration::class);
    }
}
