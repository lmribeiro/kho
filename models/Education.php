<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property string $school
 * @property string|null $school_image
 * @property string|null $school_url
 * @property string $degree
 * @property string|null $description
 * @property string|null $start_year
 * @property string|null $end_year
 * @property int|null $grade
 * @property string $created_at
 * @property string|null $updated_at
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['school', 'degree'], 'required'],
            [['description'], 'string'],
            [['grade'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['school', 'school_image', 'school_url', 'degree'], 'string', 'max' => 255],
            [['start_year', 'end_year'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'school' => Yii::t('app', 'School'),
            'school_image' => Yii::t('app', 'School Image'),
            'school_url' => Yii::t('app', 'School Url'),
            'degree' => Yii::t('app', 'Degree'),
            'description' => Yii::t('app', 'Description'),
            'start_year' => Yii::t('app', 'Start Year'),
            'end_year' => Yii::t('app', 'End Year'),
            'grade' => Yii::t('app', 'Grade'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return EducationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EducationQuery(get_called_class());
    }
}
