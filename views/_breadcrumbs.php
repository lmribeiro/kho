<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

?>
<div class="py-4">
    <nav aria-label="breadcrumb">
        <?=
        Breadcrumbs::widget([
            'options' => [
                'class' => 'breadcrumb breadcrumb-dark breadcrumb-transparent',
            ],
            'encodeLabels' => false,
            'homeLink' => [
                'label' => '<i class="fas fa-home"></i>',
                'url' => Yii::$app->homeUrl,
                'class' => 'breadcrumb-item',
            ],
            'itemTemplate' => '<div class="breadcrumb-item">{link}</div>',
            'activeItemTemplate' => '<div class="breadcrumb-item active">{link}</div>',
            'links' => $this->params['breadcrumbs'],
        ]);

        ?>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0"><h1 class="h4"><?= Html::encode($this->title) ?></h1>
        </div>
        <div>
            <?= Html::a('<i class="fas fa-plus-circle mr-1"></i> ' . Yii::t('app', 'Criar'), ['create'], ['class' => 'btn btn-outline-gray']) ?>
        </div>
    </div>
</div>
