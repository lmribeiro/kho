<?php

use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EducationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Education');
$this->params['breadcrumbs'][] = $this->title;
$this->params['modals'][] = 'delete';

?>
<?php include __DIR__ . '/../_breadcrumbs.php'; ?>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card view">
            <div class="card-body">

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'attribute' => 'school',
                            'value' => function ($data) {
                                return Html::img($data->school_image, [
                                    'class' => 'rounded-circle',
                                    'style' => "width:32px; height:32px;",
                                ])." ".$data->school;
                            },
                            'filter' => false,
                            'format' => 'html',
                        ],
                        'degree',

                        'start_year',
                        'end_year',

                        $actionCol = Yii::$app->params['actions']([
                            'template' => '{view} {update} {delete}',
                        ]),
                    ],
                    'panel' => [],
                    'toolbar' => [
                        '{toggleData}',
                    ],
                    'bordered' => false,
                    'striped' => false,
                    'condensed' => true,
                    'responsive' => true,
                    'hover' => true,
                    'persistResize' => false,
                    'floatHeader' => false,
                ]); ?>

            </div>
        </div>
    </div>
</div>
