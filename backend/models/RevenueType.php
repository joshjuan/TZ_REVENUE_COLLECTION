<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "revenue_type".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 */
class RevenueType extends \yii\db\ActiveRecord
{
    const ACTIVE=1;
    const  INACTIVE=0;


    public static function getArrayStatus()
    {
        return [
            self::ACTIVE => Yii::t('app', 'ACTIVE'),
            self::INACTIVE => Yii::t('app', 'IN ACTIVE'),

        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'revenue_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }
}
