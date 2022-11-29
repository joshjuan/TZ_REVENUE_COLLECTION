<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "resources_transactions".
 *
 * @property int $id
 * @property int $revevue_type
 * @property string $name
 * @property string $unit_type
 * @property string $amount
 *
 * @property RevenueType $revevueType
 */
class ResourcesTransactions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resources_transactions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['revevue_type'], 'integer'],
            [['amount'], 'number'],
            [['name', 'unit_type'], 'string', 'max' => 200],
            [['revevue_type'], 'exist', 'skipOnError' => true, 'targetClass' => RevenueType::className(), 'targetAttribute' => ['revevue_type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'revevue_type' => 'Revevue Type',
            'name' => 'Name',
            'unit_type' => 'Unit Type',
            'amount' => 'Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRevevueType()
    {
        return $this->hasOne(RevenueType::className(), ['id' => 'revevue_type']);
    }
}
