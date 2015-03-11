<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {

        $a = 3;
        $b = 5;
        $sum = $a + $b;

        $param=['sum'=>$sum,'a'=>$a,'b'=>$b];
        
        return $this->render('test1', $param);
    } // end test1

    
     public  function actionTest2($name=null){
         
         //echo "Your name is $name";
         
         return $this->render('test2',['name'=>$name]);
         
     }
}
