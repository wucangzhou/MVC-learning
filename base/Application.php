<?php
/**
 * @author Cangzhou Wu<wucang.zhou@jago-ag.cn>
 * @Date: 14-9-16
 * @Time: 上午9:20
 */

namespace base;

use Controller;
class Application 
{
    public function run(){
        $param = (new Request)->parseRequest();
        $controller =$this->createController($param[0]);
        $action = 'action'.$param[1];
        if(method_exists($controller,$action)){
          return call_user_func([$controller,$action]);
        }else{
            echo 'Invalid method';
        }
    }

    public function createController($controller){
        $controller = $controller.'Controller';
        if(file_exists('./Controller/'.$controller.'.php')){
            require_once ('./Controller/'.$controller.'.php');
            $controller = 'Controller\\'.$controller;
            return new $controller;
        }else {
            echo 'Invalid Controller';
        }

    }

} 