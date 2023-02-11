<?php
/**
 * Team:ddl驱动队,NKU
 * coding by ZhuLu 2013635,20230209
 * Predict and Discussion相关
 */

namespace common\models;

/**
 * This is the ActiveQuery class for [[PredictDiscussion]].
 *
 * @see PredictDiscussion
 */
class PredictDiscussionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PredictDiscussion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PredictDiscussion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
