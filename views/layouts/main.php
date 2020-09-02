<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Modals;
use app\widgets\Notify;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="<?= Yii::$app->params['avatar']['url'] ?>">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container-fluid bg-soft">
    <?= Notify::widget(); ?>
    <?php include __DIR__ . '/_nav.php'; ?>
    <div class="row">
        <div class="col-12">
            <?php include __DIR__ . '/_sidebar.php'; ?>
            <main class="content">
                <?php include __DIR__ . '/_topbar.php'; ?>
                <?= $content ?>
            </main>
        </div>
    </div>
</div>

<?=
Modals::widget([
    'modals' => isset($this->params['modals']) ? $this->params['modals'] : [],
]);

?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
