<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "shehas".
 *
 * @property int $id
 * @property string $date_time
 * @property int $region_id
 * @property int $location_id
 * @property string $full_names
 * @property string $mobile_number
 */
class Shehas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shehas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_time'], 'safe'],
            [['region_id', 'location_id'], 'integer'],
            [['full_names', 'mobile_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_time' => 'Date Time',
            'region_id' => 'Region ID',
            'location_id' => 'Location ID',
            'full_names' => 'Full Names',
            'mobile_number' => 'Mobile Number',
        ];
    }
}
