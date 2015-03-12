<?php

use kartik\grid\GridView;
use yii\helpers\Html;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานประชากรรายบุคคล';

echo GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'panel' => [
        'before' => 'รายงานนับถือศาสนา',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
    ]
])
?>
