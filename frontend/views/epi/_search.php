<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EpiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="epi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'HOSPCODE') ?>

    <?= $form->field($model, 'PID') ?>

    <?= $form->field($model, 'SEQ') ?>

    <?= $form->field($model, 'DATE_SERV') ?>

    <?= $form->field($model, 'VACCINETYPE') ?>

    <?php // echo $form->field($model, 'VACCINEPLACE') ?>

    <?php // echo $form->field($model, 'PROVIDER') ?>

    <?php // echo $form->field($model, 'D_UPDATE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
