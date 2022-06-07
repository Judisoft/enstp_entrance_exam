<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcourRegistration extends Model
{
    use HasFactory;

    protected $table = 'concour_registrations';

    protected $fillable = [
        'program_choice',
        'user_id',
        'transaction_id',
        'identification_document',
        'identification_number',
        'sponsor',
        'writing_center'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function transaction() {
        return $this->hasOne(TransactionId::class);
    }
}
