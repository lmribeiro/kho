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
            <?php if (Yii::$app->controller->action->id === "index") { ?>
                <?= Html::a('<i class="fas fa-plus-circle mr-1"></i> ' . Yii::t('app', 'New'), ['create'], ['class' => 'btn btn-sm btn-outline-gray']) ?>
            <?php } else if (Yii::$app->controller->action->id === "view") { ?>
                <?= Html::a('<i class="fas fa-fw fa-pencil-alt"></i> '.Yii::t('app', 'Update'), ['update', 'id' => $model->id],
                    ['class' => 'btn btn-sm btn-primary'])
                ?>
                <?= Html::a('<i class="fas fa-fw fa-trash"></i> '.Yii::t('app', 'Delete'), ['delete', 'id' => $model->id],
                    [
                        'class' => 'btn btn-sm btn-danger',
                        'data-id' => $model->id, 'data-toggle' => 'modal', 'data-target' => '#delete_modal',
                    ])
                ?>
            <?php } ?>
        </div>
    </div>
</div>
