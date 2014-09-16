<?php
/**
 * @author Cangzhou Wu<wucang.zhou@jago-ag.cn>
 * @Date: 14-9-16
 * @Time: 上午10:46
 */

namespace base;


class Controller 
{
    public function render($view){
        $path = $this->findViewFile($view);
        include $path;
    }

    public function findViewFile($view){
        $controllerName = str_replace('Controller','',get_called_class());
        $path = $_SERVER['DOCUMENT_ROOT']."/MVC/views".$controllerName.'/'.$view.'.php';
        return $path;
    }
} 