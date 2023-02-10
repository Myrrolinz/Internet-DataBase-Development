<?php
/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 袁嘉蔚 1810546,20200529
 * a model for Web Traffic Statistics
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "pcounter_save".
 *
 * @property string $save_name
 * @property int $save_value
 */
class PcounterSave extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcounter_save';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['save_name', 'save_value'], 'required'],
            [['save_value'], 'integer'],
            [['save_name'], 'string', 'max' => 10],
            [['save_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'save_name' => 'Save Name',
            'save_value' => 'Save Value',
        ];
    }
}
