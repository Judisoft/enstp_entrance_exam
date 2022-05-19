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
        'user_id'
    ];

    public function concour_registration() {
        return $this->belongsTo(App\Models\User::class);
    }
}
