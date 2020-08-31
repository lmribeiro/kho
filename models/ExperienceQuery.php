<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Experience]].
 *
 * @see Experience
 */
class ExperienceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Experience[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Experience|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
