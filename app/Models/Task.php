<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;



class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'is_done', 'user_id'];

    // Setiap task dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
