<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,202302008
 * blog文章相关
 */

namespace common\models;


/**
 *
 * @see Article
 */
class ArticleQuery extends \yii\db\ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return Article[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Article|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function latest(){
        return $this->orderBy(['date'=>SORT_DESC]);
    }

    public function published(){
        return $this->andWhere(['status'=>Article::STATUS_PUBLISHED]);
    }

    public function creator($userId){
        return $this->andWhere(['created_by'=>$userId]);
    }

    public function byKeyword($keyword){
        return $this->andWhere("MATCH(title,description)
        AGAINST(:keyword)",['keyword'=>$keyword]);
    }
}
