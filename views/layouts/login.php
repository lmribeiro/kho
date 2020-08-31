<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
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
    <?php $this->head() ?>
</head>
<body class="bg-soft">
<?php $this->beginBody() ?>

<div class="container-fluid bg-soft">
    <main>

        <!-- Section -->
        <section class="vh-lg-100 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image"
                     data-background-lg="">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
