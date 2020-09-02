<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Education */

$this->title = Yii::t('app', 'Update: {name}', [
    'name' => $model->degree,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Education'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->degree, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


