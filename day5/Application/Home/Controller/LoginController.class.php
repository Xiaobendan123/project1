<?php
/**
 * Created by PhpStorm.
 * User: luchen
 * Date: 07/12/2017
 * Time: 18:00
 */

namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $User = M("User"); // 实例化User对象
// 查找status值为1name值为think的用户数据
        $data = $User->where('id=1')->find();
        //dump($data);

        $this->assign("user",$data);
        $this->display();
    }

    public function check_user()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $User = M("User"); // 实例化User对象
        $condition['email'] = $email;
        $condition['password'] =  md5($password);

        $data = $User->where( $condition)->find();
        if($data)
        {
            $re_data['status'] = 0;
            $re_data['content'] = "log in successfully";
        }
        else
        {
            $re_data['status'] = 1;
            $re_data['content'] = "log in fail";
        }


        $this->ajaxReturn($re_data);
    }
}
