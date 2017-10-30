<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/23
 * Time: 23:51
 */

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller
{
    public function CheckAdminIsLogin ()
    {
        if ( is_null ( session ( 'Admin' ) ) )
        {
            return redirect ( U ( 'Index/Login' ) );
        }
    }
}
