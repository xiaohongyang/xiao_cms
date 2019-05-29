<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CmsArticleTypeArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("cms_article_type_article", function (Blueprint $table){

            $table->increments("id");
            $table->integer("article_id")->nullable(false)->default(0)->comment("cms_article表主键,文章id");
            $table->integer("article_type_id")->nullable(false)->default(0)->comment("cms_article_type表主键,文章类别id");
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
        Schema::drop("cms_article_type_article");
    }
}
