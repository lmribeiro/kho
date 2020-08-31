<?php

namespace app\widgets;

use Yii;
use yii\bootstrap4\Widget;

class Modals extends Widget
{
    public $modals = [];
    public $folder = 'views/modals';

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (empty($this->modals)) {
            return;
        }
        $result = array_unique($this->modals);
        foreach ($result as $link) {
            include Yii::$app->basePath."/$this->folder/$link.php";
        }
    }
}
