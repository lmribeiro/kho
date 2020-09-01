<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name . ' | ' . Yii::t('app', 'Recuperar Password');

?>
<div class="text-center text-md-center mb-4 mt-md-0">
    <h1 class="mb-0 h5"><?= Html::encode(Yii::t('app', 'Recuperar Password')) ?></h1>
</div>

<?php
$form = ActiveForm::begin([
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-12 control-label'],
    ],
]);

?>

<?= $form->field($model, 'emailusername')->textInput(['autofocus' => true, 'class' => 'form-control ']); ?>

<div class="row mt-4">
    <div class="col-lg-12">
        <?= Html::submitButton(Yii::t('app', 'Enviar'), ['class' => 'btn btn-primary btn-block shadow border-0', 'name' => 'login-button']); ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
<div class="mt-2 text-center">
    <a href="<?= Url::to(['login'])?>" class="small text-center"><?= Yii::t('app', 'Voltar ao login') ?></a>
</div>

