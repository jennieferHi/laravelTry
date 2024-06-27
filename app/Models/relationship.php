<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relationship extends Model
{
    protected $table="relationship";
    protected $primary="id";
    public $timestamps=false;
    protected $fillable=["id","Article_id","key_id"];

}
