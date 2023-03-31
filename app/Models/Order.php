<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'itemId', 'email','status',
    ];
    function item(){
      return $this->hasMany(Item::class,'itemId');
    }
}
