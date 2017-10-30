<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $User = D("Userinfo");
        $user = $User->relation('Question')->select();
       dump ($user);
        foreach ($user as $key)
        {
            dump (count ($key['Question']));
        }
    }
}