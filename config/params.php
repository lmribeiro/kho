<?php

use yii\helpers\Html;
use yii\helpers\Url;

return [
    'avatar' => [
        'name' => 'Luis Ribeiro',
        'url' => 'https://avatars1.githubusercontent.com/u/4492981',
    ],
    'user.passwordResetTokenExpire' => 3600,
    'bsVersion' => '4.x', // this will set globally `bsVersion` to Bootstrap 4.x for all Krajee Extensions
    'actions' => function ($attributes) {
        $col = Yii::$app->params['actionCol'];
        foreach ($attributes as $key => $value) {
            $col[$key] = $value;
        }
        $col['header'] = Yii::t('app', 'Actions');
        return $col;
    },
    'actionCol' => [
        'class' => 'yii\grid\ActionColumn',
        'headerOptions' => ['class' => 'text-center'],
        'template' => '{view} {update} {delete}',
        'buttons' => [
            'view' => function ($url) {
                return Html::tag('span', Html::a('<i class="fas fa-fw fa-eye"></i>', $url, ['class' => 'btn btn-outline-success']), ['data-toggle' => 'tooltip', 'data-title' => Yii::t('app', 'View')]);
            },
            'update' => function ($url) {
                return Html::tag('span', Html::a('<i class="fas fa-fw fa-pencil-alt"></i>', $url, ['class' => 'btn btn-outline-info']), ['data-toggle' => 'tooltip', 'data-title' => Yii::t('app', 'Update')]);
            },
            'delete' => function ($url, $model) {
                $action = explode('?', $url);
                return Html::tag('span', Html::a('<i class="fas fa-fw fa-trash"></i>', '#', ['class' => 'btn btn-outline-danger btn-delete', 'data-url' => array_shift($action), 'data-id' => $model->id, 'data-toggle' => 'modal', 'data-target' => '#delete_modal']), ['data-toggle' => 'tooltip', 'data-title' => Yii::t('app', 'Delete')]);
            },
        ],
        'urlCreator' => function ($action, $data) {
            return Url::to([Yii::$app->controller->id . "/$action", 'id' => isset($data->id) ? $data->id : (isset($data->code) ? $data->code : $data->key)]);
        },
    ],
    'ckeditorConfig' => ['preset' => 'advance'],
    'ckeditorSimpleConfig' => [
        'preset' => 'custom',
        'clientOptions' => [
            'toolbarGroups' => [
                ['name' => 'basicstyles', 'groups' => ['styles', 'basicstyles', 'cleanup']],
                ['name' => 'links', 'groups' => ['links', 'insert']],
            ],
        ],
    ],
    'filterWidgetOptions' => [
        'pluginOptions' => [
            'allowClear' => true,
            'dropdownAutoWidth' => true,
            'containerCss' => [
                'padding-right' => '35px'
            ]
        ],
    ]
];
