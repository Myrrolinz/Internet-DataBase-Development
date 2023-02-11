<?php


/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen,20230209
 * video相关
 */
namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Subscriber]].
 *
 * @see \common\models\Subscriber
 */
class SubscriberQuery extends \yii\db\ActiveQuery
{

    /**
     * {@inheritdoc}
     * @return \common\models\Subscriber[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Subscriber|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
