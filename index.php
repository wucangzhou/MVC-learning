<?php
/**
 * @author Cangzhou Wu<wucang.zhou@jago-ag.cn>
 * @Date: 14-9-16
 * @Time: 上午9:22
 */


 function __autoload($class){
     if(file_exists($class.'.php')){
         require_once($class . '.php');
         // check to see whether the include declared the class
         if (!class_exists($class, false)) {
             trigger_error("unable to load class: $class", e_user_warning);
         }
     }
//     if(file_exists('Controller\\'.$class.'.php')){
//         require_once('Controller\\'.$class . '.php');
//     }

}

(new base\Application)->run();