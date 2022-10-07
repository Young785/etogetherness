<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $cast = ['file_uploaded' => array()];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
