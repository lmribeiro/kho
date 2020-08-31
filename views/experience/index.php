<?php

use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExperienceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Experiência');
$this->params['breadcrumbs'][] = $this->title;
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

                        'id',
                        'title',
                        'company',
                        'company_image',
                        'company_url:url',
                        //'location',
                        //'description:ntext',
                        //'start_date',
                        //'end_date',
                        //'current',
                        //'created_at',
                        //'updated_at',

                        ['class' => 'yii\grid\ActionColumn'],
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
