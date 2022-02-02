<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_details extends Model
{
    use HasFactory;
    // protected  $table= 'booking_details';//when table name and model name not same
    protected  $guarded=[];


    public function bview()
    {
        return $this->hasMany(Booking::class,"user_id",'id');

    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    

}
