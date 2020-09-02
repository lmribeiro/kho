<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<?php
$form = ActiveForm::begin([
    'id' => 'form-delete',
]);

?>

<div id="delete_modal" class="modal fade delete_modal" role="dialog" arian-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="py-3 px-2 text-center">
                    <span class="modal-icon display-1-lg">
                        <span class="fas fa-trash"></span>
                    </span>
                    <h2 class="h3 modal-title mb-3 text-white"><?= Yii::t('app', 'Delete') ?></h2>
                    <p class="mb-4 text-white"><?= Yii::t('app', 'Tem a certeza que pretende apagar este item?') ?></p>
                    <div class="progress-wrapper">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <button class="btn btn-danger" type="submit">
                        <?= Yii::t('app', 'OK'); ?>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
<script>
    $('#form-delete').submit(function () {
        $('#delete_modal').modal('hide');
    });

    $('.btn-delete').on('click', function () {
        const url = "delete?id=" + $(this).data('id');

        if ($(this).data('url')) {
            url = "<?= Url::base(true) ?>" + $(this).data('url') + '?id=' + $(this).data('id');
        }

        $('#form-delete').attr('action', url);
    });

    $('.btn-delete-image').on('click', function () {
        $('#form-delete').attr('action', $(this).data('url'));
    });
</script>

