<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2018/3/25
 * Time: 14:26
 */

namespace Xiaohongyang\LaravelCmsAdmin\Controllers;

use App\Http\Controllers\Controller;

class BaseController extends Controller {


    protected $manager;

    protected $pageAmount = 3;

    protected $view_name;

    protected $breadcrumb;

    /**
     * @return mixed
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    /**
     * @param mixed $breadcrumb
     */
    public function setBreadcrumb($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * @return mixed
     */
    public function getViewName()
    {
        return $this->view_name;
    }

    /**
     * @param mixed $view_name
     */
    public function setViewName($view_name)
    {
        $this->view_name = $view_name;
    }

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param mixed $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }

    public function view( $params = [], $view_name=null) {

        if(!empty($view_name)){
            return view('cms_admin::' . $view_name, $params);
        }

        $action = \Route::current()->getAction();
        $arr = explode('@', $action['controller']);
        $controllerArr = explode('\\', $arr[0]);

        $view_name = $this->getViewName();
        if (empty($view_name)) {
            $view_name = $arr[1];
        }

        $controller = last($controllerArr);
        $controller_name = str_replace('Controller', '', $controller);
        $view_path = 'cms_admin::' . $controller_name . '.' . $view_name;

        if($this->getBreadcrumb()){
            $params['breadcrumb'] = $this->getBreadcrumb();
        }

        return view($view_path, $params);
    }


    /**
     * 返回json响应
     * @user : xiaohongyang 258082291@qq.com
     * @param $status
     * @param $message
     * @param array $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function json_result($status, $message, $data=[], $code=0){

        $result = [
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'code' => $code
        ];

        return response()->json($result);
    }

}