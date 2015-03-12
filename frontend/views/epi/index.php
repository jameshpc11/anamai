<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Epis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="epi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Epi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'HOSPCODE',
            'PID',
            'SEQ',
            'DATE_SERV',
            'VACCINETYPE',
            // 'VACCINEPLACE',
            // 'PROVIDER',
            // 'D_UPDATE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
