<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends BaseController
{
    public function index ()
    {
        $this->CheckAdminIsLogin ();
        $this->display ( 'Index' );
    }

    public function Login ()
    {

        $this->display ( 'Login' );
    }

    public function CheckLogin ()
    {
        if ( IS_AJAX )
        {
            $admin = D ( 'Admininfo' );
            $account = I ( 'account' , '' , 'htmlspecialchars' );
            $password = md5 ( I ( 'password' , '' ) );
            $where[ 'account' ] = ':account';
            $where[ 'password' ] = ':password';
            $bind[ ':account' ] = [ $account , \PDO::PARAM_STR ];
            $bind[ ':password' ] = [ $password , \PDO::PARAM_STR ];
            $Admin = $admin->where ( $where )->bind ( $bind )->select ();
            if ( count ( $Admin ) > 0 )
            {
                session ( 'Admin' , $account );
                $this->ajaxReturn ( [
                    'status' => 0 ,
                    'msg' => '登录成功' ,
                    'url' => U ( 'index' )
                ] );
            } else
            {
                $this->ajaxReturn ( [
                    'status' => 1 ,
                    'msg' => '用户名或密码不正确' ,
                    1 => $account ,
                    2 => $password
                ] );
            }
        } else
        {
            die( '非法操作' );
        }
    }

    public function Exits ()
    {
        session ( 'Admin' , null );
        $this->redirect ( 'index' );
    }
}
