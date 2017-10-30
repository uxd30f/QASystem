<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/24
 * Time: 9:36
 */

namespace Admin\Controller;


use Think\Page;

class UserController extends BaseController
{
    public function index ()
    {
        $this->CheckAdminIsLogin ();
        $Model = D ( "Userinfo" );
        $count = $Model->count ();
        $Page = new Page( $count , 15 );
        $show = $Page->show ();
        $User = $Model->relation ( true )->order ( 'id desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();;
        $this->data = $User;
        $this->page = $show;
        $this->display ( 'User/Index' );
    }

    public function Activation ( $id )
    {
        $Entity = D ( "Userinfo" );
        $Entity->status = 1;
        $Entity->where ( 'id=' . $id );
        if ( $Entity->save () )
        {

        } else
        {

        }
    }

    public function Prohibit ( $id )
    {
        $Entity = D ( "Userinfo" );
        $Entity->status = 2;
        $Entity->where ( 'id=' . $id );
        if ( $Entity->save () )
        {

        } else
        {

        }
    }
}