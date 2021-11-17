<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'number','room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    } 
}
