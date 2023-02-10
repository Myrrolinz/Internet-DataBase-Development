<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 袁嘉蔚 1810546,20200529
 * a model for Users' Information Collection
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "pcounter_users".
 *
 * @property string $user_ip
 * @property int $user_time
 */
class PcounterUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcounter_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_ip', 'user_time'], 'required'],
            [['user_time'], 'integer'],
            [['user_ip'], 'string', 'max' => 32],
            [['user_ip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_ip' => 'User Ip',
            'user_time' => 'User Time',
        ];
    }
}
