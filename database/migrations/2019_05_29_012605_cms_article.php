<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CmsArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create("cms_article", function (Blueprint $table){

            $table->increments("id");
            $table->string("title")->comment("标题");
            $table->string("thumb")->comment("缩略图");
            $table->text("desc")->comment("详情");
            $table->integer("user_id",false,false)->comment("用户id");
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop("cms_article");

    }
}
