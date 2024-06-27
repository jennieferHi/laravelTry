<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey  = "order_id";
    protected $fillable = [
        "order_id",
        "custom_id",
        "order_total",
        "order_remainTotal",
        "created_at",
        "updated_at",
    ];

}
