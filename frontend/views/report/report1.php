<?php

use kartik\grid\GridView;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานนับถือศาสนา';

echo GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'panel' => [
        'before' => 'รายงานนับถือศาสนา',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
    ],
    'columns'=>[
        ['class'=>'yii\grid\SerialColumn'],
        
        ['attribute'=>'hoscode',
        'label'=>'รหัสสถานบริการ',
        ],
        
        ['attribute'=>'hosname',
        'label'=>'หน่วยบริการ',
        ],
        
         ['attribute'=>'total',
        'label'=>'ประชากรทั้งหมด(คน)',
        ],
        
        ['attribute'=>'buddha',
        'label'=>'ศาสนาพุทธ (คน)',
        ],
        
        ['attribute'=>'other',
        'label'=>'ศาสนาพุทธ (คน)',
        ],
    ],
    
])
?>
