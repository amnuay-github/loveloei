<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
/**
 * Description of TestController
 *
 * @author LENOVO-SL410
 */
class TestController extends Controller{
    //put your code here
    public function actionIndex(){
        
        return $this->render('index');
        
    }
}
