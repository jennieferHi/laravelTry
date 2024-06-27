<?php
// php artisan make:model home/member
namespace App\Models\home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // use HasFactory;
    //* 定義模型關聯的表(一個模型一個表)
    protected $table='member';
    // 定義主鍵
    protected $primary = 'id';
    //* 定義禁止操作時間
    public $timestamps = false;
    // 設置允許寫入資料字段
    protected $fillable = ['id','name','age','email','avatar'];

}
