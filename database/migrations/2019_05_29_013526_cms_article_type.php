<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CmsArticleType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("cms_article_type", function (Blueprint $table){

            $table->increments("id");
            $table->string("title")->comment("类别标题");
            $table->integer("parent_id",false,false)->comment("父类id")->nullable(false)->default(0);
            $table->text("desc")->comment("类别说明");
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
        Schema::drop("cms_article_type");
    }
}
