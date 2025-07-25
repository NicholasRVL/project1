<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;



class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'notes', 'user_id', 'is_done'];

    protected $attributes = [
        'is_done' => false,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
