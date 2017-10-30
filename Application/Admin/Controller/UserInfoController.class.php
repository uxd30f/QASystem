<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/24
 * Time: 9:36
 */

namespace Admin\Controller;


class UserInfoController extends BaseController
{
    public function index (  )
    {
        $this->display ('UserInfo/Index');
    }
}