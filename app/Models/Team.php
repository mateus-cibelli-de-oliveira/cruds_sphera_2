<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'number'];

    protected $attributes = ['room_id' => 1];

    public function room()
    {
        return $this->belongsTo(Room::class);
    } 
}
