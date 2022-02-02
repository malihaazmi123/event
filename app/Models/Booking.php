<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected  $guarded=[];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
        public function details()
    {
        return $this->hasMany(Booking_details::class,"booking_id",'id');
    }
  
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    
  
}