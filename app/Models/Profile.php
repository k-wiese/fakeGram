<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded=[];

    
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'uploads/yY4GtgaiXJ0psPu2yXcdnsnXZcD1S6maGNpOQ10Y.png';

        return $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
