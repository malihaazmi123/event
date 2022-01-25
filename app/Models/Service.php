<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Service extends Model
{   
    protected $guarded=[];
    public function type()
    {
      return  $this->belongsTo(Type::class,'type_id','id');
    }
    use HasFactory;
}
