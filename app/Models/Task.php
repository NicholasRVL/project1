<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;



class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id']; // Tambahkan 'user_id' ke fillable

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
