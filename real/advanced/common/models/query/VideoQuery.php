<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200504
 */

namespace common\models\query;
use common\models\Video;

/**
 * This is the ActiveQuery class for [[\common\models\Video]].
 *
 * @see \common\models\Video
 */
class VideoQuery extends \yii\db\ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return Video[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Video|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function creator($userId){
        return $this->andWhere(['created_by'=>$userId]);
    }

    public function latest(){
        return $this->orderBy(['created_at'=>SORT_DESC]);
    }

    public function published(){
        return $this->andWhere(['status'=>Video::STATUS_PUBLISHED]);
    }

    public function byKeyword($keyword){
        return $this->andWhere("MATCH(title,description,tags)
        AGAINST(:keyword)",['keyword'=>$keyword]);
    }
}
