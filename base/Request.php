<?php
/**
 * @author Cangzhou Wu<wucang.zhou@jago-ag.cn>
 * @Date: 14-9-16
 * @Time: 上午9:28
 */

namespace base;


class Request 
{
    public function __construct(){

    }

    public function parseRequest(){
        $request = isset($_GET['r'])?$_GET['r']:'';
        if(empty($request)){
            return $parseRequest = ['Default','Index'];
        }
        $parseRequest = explode('/',$request,2);
        return $parseRequest;
    }
} 