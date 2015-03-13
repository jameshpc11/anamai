<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            
            <div class="col-sm-4">
                <a href="<?=yii::$app->urlManager->createUrl('user')?>" class="btn btn-danger">จัดการ user</a>
            </div>
            
            <div class="col-sm-4">
                <button id="btn_rpt" href="" class="btn btn-danger">ประมวลผลรายงาน</button>
            </div>
         
       </div>
        
        
         <div id="show"></div>
</div>
    
    
      <?php
    $route_exec = yii::$app->urlManager->createUrl('processreport/exec');
    
    $script1 = <<< JS
            
    $('#btn_rpt').on('click', function(e) {                
    
    $('#show').html('กำลังประมวลผล...');          
    $.ajax({
       url: "$route_exec",       
       success: function(data) {
             $('#show').html('');                
            alert(data+' สำเร็จ');            
       }
    });
});
JS;
    $this->registerJs($script1);
    
    ?>
