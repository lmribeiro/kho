<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EducationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="education-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'school') ?>

    <?= $form->field($model, 'school_image') ?>

    <?= $form->field($model, 'school_url') ?>

    <?= $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'start_year') ?>

    <?php // echo $form->field($model, 'end_year') ?>

    <?php // echo $form->field($model, 'grade') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
