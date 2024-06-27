<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table = 'order_product';
    protected $primaryKey  = "order_product_id";
    protected $fillable = [
        "order_product_id",
        "custom_id",
        "product_id",
        "remaincount",
        "created_at",
        "updated_at",
    ];
}
