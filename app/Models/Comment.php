<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="Comment";
    protected $primary="id";
    public $timestamps=false;
    protected $fillable=["id","comment","article_id"];
}
