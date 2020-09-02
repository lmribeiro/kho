<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

class Notify extends Widget
{
    public $messageError;
    public $messageInfo;
    public $messageSuccess;
    public $messageWarning;
    public $position;
    public $toastr;

    public function init()
    {
        parent::init();

        if ($this->position === null) {
            $this->position = 'toast-top-right';
        }
    }

    public function run()
    {
        if (Yii::$app->session->hasFlash('success')) {
            $this->toastr = 'toastr.success("' . Yii::$app->session->getFlash('success') . '");';
        } else if (Yii::$app->session->hasFlash('error')) {
            $this->toastr = 'toastr.error("' . Yii::$app->session->getFlash('error') . '");';
        } else if (Yii::$app->session->hasFlash('info')) {
            $this->toastr = 'toastr.info("' . Yii::$app->session->getFlash('info') . '");';
        } else if (Yii::$app->session->hasFlash('warning')) {
            $this->toastr = 'toastr.warning("' . Yii::$app->session->getFlash('warning') . '");';
        }

        $this->getView()->registerJs(
            'toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "' . $this->position . '",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "10000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };' .
            $this->toastr
        );
    }
}
