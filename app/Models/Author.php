<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table="Author";
    protected $primary="id";
    public $timestamps=false;
    protected $fillable=["id","Author_name"];
}
