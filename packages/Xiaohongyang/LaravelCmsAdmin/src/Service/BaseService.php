<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/5/29
 * Time: 18:23
 */

namespace Xiaohongyang\LaravelCmsAdmin\Service;


use Illuminate\Support\Facades\Log;
use Xiaohongyang\LaravelCmsAdmin\Model\BaseModel;

class BaseService
{

    public function __construct($model=null)
    {
        if(!is_null($model)){
            $this->setModel($model);
        }
    }

    #region 分页相关
    //分页预筛选query
    protected $prevPageListQuery = null;

    /**
     * 排序
     * @var string
     */
    protected $orderBy = '';

    /**
     * 关联查询表
     * @var array
     */
    protected $queryRelation = [];

    /**
     * @return array
     */
    public function getQueryRelation()
    {
        return $this->queryRelation;
    }

    /**
     * @param array $queryRelation
     */
    public function setQueryRelation($queryRelation)
    {
        $this->queryRelation = $queryRelation;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }

    protected $totalRows = 0;
    public function setOrderColumn($column){
        $this->orderColumn = $column;
    }
    public function getTotalRows() {
        return $this->totalRows;
    }

    protected function setTotalRows($number) {
        $this->totalRows = $number;
    }

    #endregion


    protected $error;

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }


    /**
     * @var BaseModel
     */
    protected $model;

    /**
     * @return BaseModel
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param BaseModel $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }


    /**
     * 添加数据
     * @user : xiaohongyang 258082291@qq.com
     * @param array $options
     * @return bool
     * e.g:
     *  $service = new ArticleTypeService();
        $service->setModel(new ArticleType());
        $rs = $service->create(["title" => 'test2']);
     */
    public function create($options=[]){


        $result = false;
        try{
            if(!empty($options)){

                $options = array_merge($this->getModel()->toArray(), $options);

                $model = $this->getModel();
                $options = array_filter($options, function($v, $k) use($model){
                    return in_array($k, $model->getFillable());
                }, ARRAY_FILTER_USE_BOTH);
                $this->getModel()->setRawAttributes($options);
            }
            $result = $this->model->save();
        } catch (\Exception $e){

            Log::error("BaseService:create", $e);
            $this->setError($this->getModel()->getError());
        }
        return $result;
    }

    /**
     * 更新数据
     * @user : xiaohongyang 258082291@qq.com
     * @param array $options
     * @return bool
     * e.g:
     *  $service = new ArticleTypeService();
        $service->setModel(new ArticleType());
        $type = $service->getByPrimaryId(18);
        $service->setModel($type);
        $rs = $service->update(['parent_id' => 9999]);
     */
    public function update($options = []){

        $result = false;
        try{

            if(!empty($options)){
                $options = array_merge($this->getModel()->toArray(), $options);
                $this->getModel()->setRawAttributes($options);
            }
            $result =$this->model->save();
        } catch (\Exception $e){

            $this->setError($e->getMessage());
        }
        return $result;
    }

    /**
     * 主键值
     * @user : xiaohongyang 258082291@qq.com
     * @param int $id
     */
    public function getByPrimaryId($id){

        $model = $this->getModel();
        $result = $model->newQuery()->where($model->getPrimaryKey(), '=', $id)->first();
        return $result;
    }

    /**
     * 分页查询
     * @user : xiaohongyang 258082291@qq.com
     * @return $this|\Illuminate\Database\Eloquent\Builder|null
     */
    public function getPrevPageListQuery() {
        if (empty($this->prevPageListQuery)) {

            $query = $this->getModel()->newQuery();
            $this->prevPageListQuery = $query;
            if(!empty($this->getOrderBy())){
                $this->prevPageListQuery = $query->orderByRaw($this->getOrderBy());
            }
        }
        return $this->prevPageListQuery;
    }

    /**
     * @param null $prevPageListQuery
     */
    public function setPrevPageListQuery($prevPageListQuery)
    {
        $this->prevPageListQuery = $prevPageListQuery;
    }

    /**
     *
     * @user : xiaohongyang 258082291@qq.com
     * @param null $page
     * @param null $amount
     * @param array $columns
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPageList($page = null, $amount = null, $columns = ["*"]) {

        $page = !empty($page) ? $page : 1;
        $amount = !empty($amount) ? $amount : 10;

        $skip = ($page - 1) * $amount;

        $query = $this->getPrevPageListQuery();

        $totalQuery = clone $query;
        $totalRowNumber = $totalQuery->count();
        $this->setTotalRows($totalRowNumber);

        //分页过滤
        if ($totalRowNumber > 0 && ceil($totalRowNumber / $amount) < $page) {
            $skip = (ceil($totalRowNumber / $amount) - 1) * $amount;
        }

        $query = $query
            ->offset($skip)
            ->limit($amount);

        //关联查询
        $relationArr = $this->getQueryRelation();
        if(!empty($relationArr) && is_array($relationArr)){

            foreach ($relationArr as $relation){
                $query->with($relation);
            }
        }
        $result = $query->paginate($amount, $columns,"page", $page);
        return $result;
    }


}