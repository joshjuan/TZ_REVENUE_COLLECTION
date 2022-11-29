<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user_login_details".
 *
 * @property int $login_detail_id
 * @property string $login_user_id
 * @property int $login_status
 * @property string $last_login_at
 * @property string $logout_at
 * @property string $user_ip_address
 */
class UserLoginDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_login_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login_user_id', 'last_login_at', 'user_ip_address'], 'required'],
            [['login_status'], 'integer'],
            [['last_login_at', 'logout_at'], 'safe'],
            [['login_user_id'], 'string', 'max' => 200],
            [['user_ip_address'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'login_detail_id' => 'Login Detail ID',
            'login_user_id' => 'Login User ID',
            'login_status' => 'Login Status',
            'last_login_at' => 'Last Login At',
            'logout_at' => 'Logout At',
            'user_ip_address' => 'User Ip Address',
        ];
    }
}
