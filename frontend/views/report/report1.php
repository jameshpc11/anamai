<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานนับถือศาสนา';

?>

<div id="chart" style="padding-top: 10px"></div>

<?php

echo GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'panel' => [
        'before' => 'รายงานนับถือศาสนา',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
    ],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'hoscode',
            'header' => 'รหัสสถานบริการ',
        ],
        ['attribute' => 'hosname',
            'header' => 'หน่วยบริการ',
            'format' => 'raw',
            'value' => function($model) {
                $hoscode = $model['hoscode'];
                $hosname = $model['hosname'];
                return Html::a(Html::encode($hosname), ['report/report3', 'hoscode' => $hoscode]);
            }
                ],
                ['attribute' => 'total',
                    'header' => 'ประชากรทั้งหมด(คน)',
                ],
                ['attribute' => 'buddha',
                    'header' => 'ศาสนาพุทธ (คน)',
                ],
                ['attribute' => 'other',
                    'header' => 'ศาสนาพุทธ (คน)',
                ],
            ],
        ])
        ?>

        <?php



    Highcharts::widget([
            'scripts' => [
                'highcharts-more',
                'themes/grid'
            ]
        ]);
?>


<?php

        $categ = [];
        for ($i = 0; $i < count($rawData); $i++) {
            $categ[] = $rawData[$i]['hosname'];
            //array_push($categ,'vvvv');
        }
        $js_categories = implode("','", $categ);
        $data = [];
        for ($i = 0; $i < count($rawData); $i++) {
            $data[] = $rawData[$i]['buddha'];
            //array_push($categ,'vvvv');
        }
        $js_data = implode(",", $data);

        print_r($js_categories);
        echo '<hr>';
        
        print_r($js_data);

        // charts
$this->registerJs("
$(function () {
    $('#chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: ['$js_categories'],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style=\"font-size:10px\">{point.key}</span><table>',
            pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
                '<td style=\"padding:0\"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'คน',
            data: [$js_data]

        }, ]
    });
});

");
   // จบ charts

     ?>
