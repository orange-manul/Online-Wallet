<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Balance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'amount',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
