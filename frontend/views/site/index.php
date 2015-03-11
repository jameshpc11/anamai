<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'กรมอนามัย';
?>

<?php 
   
 $route1=  Yii::$app->urlManager->createUrl('test/test1')
 ?>
<a href="<?=$route1?>">ไปที่ test1</a>
<br>

<?php 
   
 $route2=  Yii::$app->urlManager->createUrl(['test/test2','name'=>'pakorn chuaysakun'])
 ?>
<a href="<?=$route2?>">ไปที่ test2</a>
<br>

<?php 
    
 echo Html::a('ลิงค์แบบที่ 3', ['test/test1']);
?>
<br>
<?php 
    
 echo Html::a('ลิงค์แบบที่ 4', ['test/test2','name'=>'jameshpc11']);
?>

<?php 
    echo yii\helpers\Url::to(['test/test2','name'=>'jameshpc11'])
?>


