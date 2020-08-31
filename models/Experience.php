<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "experience".
 *
 * @property int $id
 * @property string $title
 * @property string $company
 * @property string|null $company_image
 * @property string|null $company_url
 * @property string|null $location
 * @property string|null $description
 * @property string $start_date
 * @property string|null $end_date
 * @property int $current
 * @property string $created_at
 * @property string|null $updated_at
 */
class Experience extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'experience';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'company'], 'required'],
            [['description'], 'string'],
            [['start_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
            [['current'], 'integer'],
            [['title', 'company', 'company_image', 'company_url', 'location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'company' => Yii::t('app', 'Company'),
            'company_image' => Yii::t('app', 'Company Image'),
            'company_url' => Yii::t('app', 'Company Url'),
            'location' => Yii::t('app', 'Location'),
            'description' => Yii::t('app', 'Description'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'current' => Yii::t('app', 'Current'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ExperienceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ExperienceQuery(get_called_class());
    }
}
