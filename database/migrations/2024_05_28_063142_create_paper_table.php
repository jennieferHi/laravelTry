<?php
// php artisan make:migration create_users_table
// 遷移是一種資料庫的版本控制，讓團隊能夠輕鬆的修改跟共享應用程式的資料庫結構
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// Schema 創表
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // 創建資料表
    public function up()
    {
        // 創(表名稱,表內容)
        Schema::create('paper', function (Blueprint $table) {
            // 每個列的定義
            $table->increments("id");
            $table->string('paper_name','100')->notNull()->unique(); 
            $table->tinyInteger('total_score')->default(100);
            $table->integer("start_time")->nullable();
            $table->tinyInteger("duration");
            $table->tinyInteger("status")->default(1);
        });
    }

    /**
     * 刪除資料表
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
};
// 執行遷移
// php artisan migrate
// or
// 創建執行
// php artisan migrate:install
// or
// 刪除上一次批次執行(2024_05_28_063142_create_paper_table.php會在，但是資料庫資料與紀錄會刪除)
// php artisan migrate:rollback


// 可用的欄位類型
// 當然，結構建構器包含許多欄位類型，供你建構資料表時使用：

// 指令	描述
// $table->bigIncrements('id');	遞增的 ID（主鍵），使用相當於「UNSIGNED BIG INTEGER」的型態。
// $table->bigInteger('votes');	相當於 BIGINT 型態。
// $table->binary('data');	相當於 BLOB 型態。
// $table->boolean('confirmed');	相當於 BOOLEAN 型態。
// $table->char('name', 4);	相當於 CHAR 型態，並帶有長度。
// $table->date('created_at');	相當於 DATE 型態。
// $table->dateTime('created_at');	相當於 DATETIME 型態。
// $table->decimal('amount', 5, 2);	相當於 DECIMAL 型態，並帶有精度與基數。
// $table->double('column', 15, 8);	相當於 DOUBLE 型態，總共有 15 位數，在小數點後面有 8 位數。
// $table->enum('choices', ['foo', 'bar']);	相當於 ENUM 型態。
// $table->float('amount');	相當於 FLOAT 型態。
// $table->increments('id');	遞增的 ID (主鍵)，使用相當於「UNSIGNED INTEGER」的型態。
// $table->integer('votes');	相當於 INTEGER 型態。
// $table->json('options');	相當於 JSON 型態。
// $table->jsonb('options');	相當於 JSONB 型態。
// $table->longText('description');	相當於 LONGTEXT 型態。
// $table->mediumInteger('numbers');	相當於 MEDIUMINT 型態。
// $table->mediumText('description');	相當於 MEDIUMTEXT 型態。
// $table->morphs('taggable');	加入整數 taggable_id 與字串 taggable_type。
// $table->nullableTimestamps();	與 timestamps() 相同，但允許 NULL。
// $table->rememberToken();	加入 remember_token 使用 VARCHAR(100) NULL。
// $table->smallInteger('votes');	相當於 SMALLINT 型態。
// $table->softDeletes();	加入 deleted_at 欄位於軟刪除使用。
// $table->string('email');	相當於 VARCHAR 型態。
// $table->string('name', 100);	相當於 VARCHAR 型態，並帶有長度。
// $table->text('description');	相當於 TEXT 型態。
// $table->time('sunrise');	相當於 TIME 型態。
// $table->tinyInteger('numbers');	相當於 TINYINT 型態。
// $table->timestamp('added_on');	相當於 TIMESTAMP 型態。
// $table->timestamps();	加入 created_at 和 updated_at 欄位。
// $table->uuid('id');	相當於 UUID 型態。

// Schema::table('users', function ($table) {
//     $table->string('email')->nullable();
// });
// 
// 修飾	描述
// ->first()	將此欄位放置在資料表的「第一個」（僅限 MySQL）
// ->after('column')	將此欄位放置在其他欄位「之後」（僅限 MySQL）
// ->nullable()	此欄位允許寫入 NULL 值
// ->default($value)	為此欄位指定「預設」值
// ->unsigned()	設置 integer 欄位為 UNSIGNED