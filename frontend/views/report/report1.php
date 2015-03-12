<?php

use kartik\grid\GridView;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานนับถือศาสนา';

echo GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'panel' => [
        'before' => 'รายงาน',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
    ]
])
?>
