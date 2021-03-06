<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Login';
?>
<div class="text-center text-md-center mb-4 mt-md-0">
    <h1 class="mb-0 h5"><?= Html::encode($this->title) ?></h1>
</div>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-12 control-label'],
    ],
]); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
</div>
<div class="d-flex justify-content-between align-items-center mb-2">
    <?= $form->field($model, 'password')->passwordInput() ?>
</div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <?=
    $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class= \"form-check-label mt-3\">{input}\n <label class=\"custom-control-label\"{label}</label> </div>",
        'class' => 'form-check-input',
    ]);

    ?>
</div>

<div class="form-group">
    <div class="col-lg-12">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
    </div>
</div>
<div></div>
<div class="mt-2 text-center">
    <a href="<?= Url::to(['reset-password']) ?>"
       class="small text-center"><?= Yii::t('app', 'Recuperar password') ?></a>
</div>

<?php ActiveForm::end(); ?>
