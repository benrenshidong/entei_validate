<?php
/**
 * Created by PhpStorm.
 * User: ergeng
 * Date: 2019/10/17
 * Time: 5:27 PM
 */

namespace Entei\Validate;


class Validate
{
    /*
     * 验证手机号码
    */
    public function isMobile(string $mobile){
        if(!preg_match("/^1[2-9][0-9]{9}$/", $mobile)){
            return false;
        }else{
            return true;
        }
    }

    /**
     * 验证邮箱
     * @param $data
     * @return bool
     */
    public function is_email($data){
        if(!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$data)){
            return false;
        }else{
            return true;
        }
    }


    /**
     * 验证管理员密码,6到12位数字和字母的组合 必须包含数字和大小写字母
     * @param $data
     * @param int $min_l
     * @param int $max_l
     * @return bool
     */
    public function password($data,$min_l=6,$max_l=20){
        if(!preg_match("/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{".$min_l.",".$max_l."}$/u",$data)){
            return false;
        }else{
            return true;
        }
    }


}