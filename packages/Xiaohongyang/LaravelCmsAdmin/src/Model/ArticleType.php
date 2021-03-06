<?php

namespace Xiaohongyang\LaravelCmsAdmin\Model;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;


/**
 * Class ArticleType
 * @property int $id
 * @property string $title
 * @property int parent_id
 * @property string desc
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @package Xiaohongyang\LaravelCmsAdmin\Model
 */
class ArticleType extends BaseModel
{

    use SoftDeletes;


    protected $table = "cms_article_type";

    protected $primaryKey = "id";


    /**
     * 默认值
     * @var array
     */
    protected $fillable = [
        "id",
        "parent_id",
        "title",
        "desc",
    ];

    protected $attributes = [
        'desc' => '',
        'parent_id' => 0
    ];

    public $insertDataRule = [
        'title' => ['required']
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

    public function hasManyArticle(){
        return $this->hasMany(Article::class, 'type_id', 'id');
    }

}
