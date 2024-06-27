<?php

namespace App\Models;
// https://laravel.tw/docs/5.2/eloquent-relationships
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="Article";
    protected $primary="id";
    public $timestamps=false;
    protected $fillable=["id","Article_name","Article_id"];
    // 關聯操作 主模型寫關聯
    // public function 被關聯的模型小寫(){
    //     return $this->hasOne("需要關聯模型的命名空間","外鍵(被關聯)","本地鍵(當前模型關聯)");
    // }
    public function author(){
        // author.id article.Article_id
        return $this->hasOne("App\Models\Author","id","Article_id");
    }
    public function comment(){
        // author.id article.Article_id
        return $this->hasMany("App\Models\comment","Article_id","id");
    }
    
    public function keyword(){
        // author.id article.Article_id
        return $this->belongsToMany("App\Models\keyword","relationship","Article_id","key_id");
    }
}
