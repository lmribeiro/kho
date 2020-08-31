<?php

use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EducationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Educação');
$this->params['breadcrumbs'][] = $this->title;
$this->params['modals'][] = 'delete';

?>
<?php include __DIR__ . '/../_breadcrumbs.php'; ?>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card ">
            <div class="card-body">

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'degree',
                        'school',
                        //'school_image',
                        //'school_url:url',
                        //'description:ntext',
                        'start_year',
                        'end_year',
                        //'grade',
                        //'created_at',
                        //'updated_at',
                        $actionCol = Yii::$app->params['actions']([
                            'template' => '{view} {update} {delete}',
                        ]),
                    ],
                    'panel' => [
//                        'type' => GridView::TYPE_DEFAULT,
//                        'heading' => Html::encode($this->title),
//                        'before' => '<div class="btn-group">'.Html::a('<i class="fe fe-plus"></i>'.Yii::t('app', 'Nova'), ['create'], ['class' => 'btn btn-outline-success']).'</div>',
                    ],
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
