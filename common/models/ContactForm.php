<?php
/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen,20230209
 * a model for contactform
 */
 
namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_form".
 *
 * @property string $firstname
 * @property string $lastname
 * @property string $wechatid
 * @property string|null $phone
 * @property string $message
 * @property int|null $sex
 * @property int $id
 */
class ContactForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'wechatid', 'message'], 'required'],
            [['sex'], 'integer'],
            [['firstname', 'lastname', 'wechatid', 'phone'], 'string', 'max' => 50],
            [['message'], 'string', 'max' => 255],
        ];
    }
    
        public function contactinject()
    { 
        $contact_form = new contact_form;
        $contact_form->firstname = $this->firstname;
        $contact_form->lastname = $this->lastname;
        $contact_form->sex= $this->sex;
        $contact_form->wechatid= $this->wechatid;
        $contact_form->phone= $this->phone;
        $contact_form->message= $this->message;
        return $contact_form->save() ;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'wechatid' => 'Wechatid',
            'phone' => 'Phone',
            'message' => 'Message',
            'sex' => 'Sex',
            'id' => 'ID',
        ];
    }
}
