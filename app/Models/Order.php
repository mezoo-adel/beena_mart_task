<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_id', 'email', 'status',
    ];
    protected $guarded;
    public function item()
    {
        return $this->hasMany(Item::class, 'id', 'item_id');
    }
}
