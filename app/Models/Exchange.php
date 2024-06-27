<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    protected $table = 'Exchange';
    protected $primaryKey  = "exchange_product_id";
    protected $fillable = [
        "exchange_product_id",
        "order_product_id",
        "count",
        "created_at",
        "updated_at",
    ];

}
