<?php
namespace app\controllers;

use app\common\BaseController;
use app\common\ResponseUtil;

class IndexController extends BaseController {

    public function actionIndex() {
        return $this->render('index.html', [
            'info'=>'welcome'
        ]);
    }

    public function actionJson() {
        return ResponseUtil::successReturn();
    }

}
