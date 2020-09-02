<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Education */

$this->title = $model->degree;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Education'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['modals'][] = 'delete';
\yii\web\YiiAsset::register($this);
?>
<?php include __DIR__ . '/../_breadcrumbs.php'; ?>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card view">
            <div class="card-body">
                <img class="rounded-circle" src="<?= $model->school_image ?>" alt="<?= $model->school ?>"/>
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'school',
                        'school_url:url',
                        'degree',
                        'description:ntext',
                        'start_year',
                        'end_year',
                        'grade',
                        'created_at',
                        'updated_at',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>
