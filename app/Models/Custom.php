<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    use HasFactory;
    protected $table = 'custom'; 
    protected $primaryKey  = "custom_id";
    protected $fillable = [ 
        "custom_id",
        "name",
        "email",
        "address",
        "url",
        "other",
        "birthday",
        "description",
        "score",
        "phone",

    ];
    public function getJWTIdentifier()
    {
        return $this->getKey(); // Eloquent 模型的主键
    }
}
