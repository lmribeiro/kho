<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Education */
/* @var $form yii\widgets\ActiveForm */
?>

<?php include __DIR__ . '/../_breadcrumbs.php'; ?>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card ">
            <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>
                <div class="mb-3">
                    <span class="h6 font-weight-bold"><?= Yii::t('app', 'School'); ?></span>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <?= $form->field($model, 'school')
                            ->textInput(['maxlength' => true])
                            ->label(Yii::t('app', 'Name')) ?>
                    </div>
                    <div class="col-6">
                        <?= $form->field($model, 'school_url')
                            ->textInput(['maxlength' => true])
                            ->label(Yii::t('app', 'Webpage')) ?>
                    </div>
                </div>
                <div class="mb-4">
                    <?= $form->field($model, 'school_image')
                        ->textInput(['maxlength' => true])
                        ->label(Yii::t('app', 'Image')) ?>
                </div>
                <div class="mb-3">
                    <span class="h6 font-weight-bold"><?= Yii::t('app', 'Degree'); ?></span>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                        <?= $form->field($model, 'degree')
                            ->textInput(['maxlength' => true])
                            ->label(Yii::t('app', 'Name')) ?>
                    </div>
                    <div class="col-3">
                        <?= $form->field($model, 'grade')
                            ->textInput() ?>
                    </div>
                    <div class="col-3">
                        <?= $form->field($model, 'start_year')
                            ->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-3">
                        <?= $form->field($model, 'end_year')
                            ->textInput(['maxlength' => true]) ?>
                    </div>

                </div>

                <div class="mb-3">
                    <?= $form->field($model, 'description')
                        ->textarea(['rows' => 6]) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
