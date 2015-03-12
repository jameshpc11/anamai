<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Epi */

$this->title = 'Update Epi: ' . ' ' . $model->HOSPCODE;
$this->params['breadcrumbs'][] = ['label' => 'Epis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HOSPCODE, 'url' => ['view', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID, 'DATE_SERV' => $model->DATE_SERV, 'VACCINETYPE' => $model->VACCINETYPE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="epi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
