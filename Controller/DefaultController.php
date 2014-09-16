<?php
/**
 * @author Cangzhou Wu<wucang.zhou@jago-ag.cn>
 * @Date: 14-9-16
 * @Time: 上午10:48
 */

namespace Controller;

use base\Controller;
class DefaultController extends Controller
{
    public function actionIndex(){
        echo '1';
        $this->render('about');
    }
} 