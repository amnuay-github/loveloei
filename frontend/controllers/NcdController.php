<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use Yii;
use yii\web\controller;

/**
 * Description of NcdController
 *
 * @author LENOVO-SL410
 */
class NcdController extends controller {

    //put your code here

    public function actionIndex() {
           $project_name = 'LoveLoei2016';
           $count  = 2016+543;
           $value = "'90' '60' '50'";
        return $this->render('index', [
            'value' => $value,
            'count'=>$count ,
            'project_name'=> $project_name ]);
    }

}
