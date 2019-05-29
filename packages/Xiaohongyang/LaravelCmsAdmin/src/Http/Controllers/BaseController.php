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

    protected $pageAmount = 10;

    protected $view_name;

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

    public function view( $params = []) {

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
        return view($view_path, $params);
    }

}