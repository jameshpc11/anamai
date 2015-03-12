<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Epi */

$this->title = 'Create Epi';
$this->params['breadcrumbs'][] = ['label' => 'Epis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="epi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
