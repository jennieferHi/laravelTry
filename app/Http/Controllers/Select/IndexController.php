<?php
// https://laravel.com/docs/11.x/queries#joins
namespace App\Http\Controllers\Select;

use App\Http\Controllers\Controller;
// https://laravel.tw/docs/5.2/eloquent
use App\Models\Article;

// insert 方法
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function test5()
    {
        // SELECT * FROM larvavel.article as t1 join larvavel.author as t2 on t1.Article_id=t2.id ;
        $result = DB::table("article as t1")->select(DB::raw("t1.id,t1.Article_name,t2.Author_name"))->leftJoin('author as t2', 't1.Article_id', '=', 't2.id')->get();
        dd($result);

    }
    public function test1()
    {
        // SELECT * FROM larvavel.article as t1 join larvavel.author as t2 on t1.Article_id=t2.id ;
        $data = \App\Models\Article::get();
        foreach ($data as $key => $value) {
            echo $value->id . '&emsp;' . $value->Article_name .$value->author->Author_name.'<br/>';
        }
    }
    public function test2()
    {
        // SELECT * FROM larvavel.article as t1 join larvavel.author as t2 on t1.Article_id=t2.id ;
        $data=\App\Models\Article::get();
        foreach ($data as $key => $value) {
            echo '當前文章'. $value->Article_name .$value->author->Author_name.'<br/>';
        }
    }

    public function test3()
    {
        // SELECT * FROM larvavel.article as t1 join larvavel.author as t2 on t1.Article_id=t2.id ;
        $data=\App\Models\Article::get();
        foreach ($data as $key => $value) {
            echo '0000'. $value->Article_name .$value->author->Author_name.'<br/>';
            foreach($value ->keyword as $k => $val) {
                echo ''. $val->keyword;
            }
        }
    }
}
