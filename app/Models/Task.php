<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'due_date',
        'User_ID', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID');
    }
}
