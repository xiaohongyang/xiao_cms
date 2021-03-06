<?php

namespace Xiaohongyang\LaravelCmsAdmin\Model;

use Illuminate\Support\Facades\Log;

/**
 * Class Article
 * @property id
 * @property title
 * @package Xiaohongyang\LaravelCmsAdmin\Model
 */

class Article extends BaseModel
{

    protected $table = "cms_article";

    /**
     * 默认值
     * @var array
     */
    protected $fillable = [
        "title",
        "thumb",
        "desc",
        "user_id",
    ];

    protected $attributes = [
        'thumb' => '',
        'desc' => '',
        'user_id' => 0
    ];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        self::creating(function(ArticleType $model){

            $rs = $model->insertDataValid();

            if(!$rs){
                Log::error("插入数据失败", $model->getError());
                throw new \Exception("插入数据验证失败", 101);
            }
        });
    }


    public $insertDataRule = [
        'title' => ['required'],
        'user_id' => ['required']
    ];
}
