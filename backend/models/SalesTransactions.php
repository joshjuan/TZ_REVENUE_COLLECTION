<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sales_transactions".
 *
 * @property int $id
 * @property string $date_time
 * @property string $trans_type
 * @property int $client_id
 * @property int $zone_id
 * @property int $location_id
 * @property int $resource_id
 * @property string $weight_type
 * @property string $weight
 * @property string $plate_number
 * @property string $phone_number
 * @property string $amount
 * @property string $market_id
 * @property string $product_id
 * @property string $advertisement_id
 * @property string $vehicle_id
 * @property int $route_id
 * @property string $sheha_id
 * @property string $seller_id
 * @property string $buyer_id
 * @property string $property_id
 * @property string $property_type_id
 * @property int $offence_type_id
 * @property string $receipt_number
 * @property int $user_id
 * @property string $license_type_id
 * @property string $license_number
 * @property string $advert_ref_number
 * @property string $percentage
 * @property string $building_type_id
 * @property string $reference_no
 * @property string $payer_name
 * @property int $cancelled_by
 * @property string $cancelled_date_time
 * @property string $cancelled_amount
 */
class SalesTransactions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sales_transactions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_time', 'cancelled_date_time'], 'safe'],
            [['trans_type'], 'string'],
            [['client_id', 'zone_id', 'location_id', 'resource_id', 'route_id', 'offence_type_id', 'user_id', 'cancelled_by'], 'integer'],
            [['amount', 'cancelled_amount'], 'number'],
            [['weight_type', 'weight', 'plate_number', 'phone_number', 'market_id', 'product_id', 'advertisement_id', 'vehicle_id', 'sheha_id', 'seller_id', 'buyer_id', 'property_id', 'property_type_id', 'receipt_number', 'license_type_id', 'license_number', 'advert_ref_number', 'percentage', 'building_type_id', 'reference_no', 'payer_name'], 'string', 'max' => 255],
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
            'trans_type' => 'Trans Type',
            'client_id' => 'Client ID',
            'zone_id' => 'Zone ID',
            'location_id' => 'Location ID',
            'resource_id' => 'Resource ID',
            'weight_type' => 'Weight Type',
            'weight' => 'Weight',
            'plate_number' => 'Plate Number',
            'phone_number' => 'Phone Number',
            'amount' => 'Amount',
            'market_id' => 'Market ID',
            'product_id' => 'Product ID',
            'advertisement_id' => 'Advertisement ID',
            'vehicle_id' => 'Vehicle ID',
            'route_id' => 'Route ID',
            'sheha_id' => 'Sheha ID',
            'seller_id' => 'Seller ID',
            'buyer_id' => 'Buyer ID',
            'property_id' => 'Property ID',
            'property_type_id' => 'Property Type ID',
            'offence_type_id' => 'Offence Type ID',
            'receipt_number' => 'Receipt Number',
            'user_id' => 'User ID',
            'license_type_id' => 'License Type ID',
            'license_number' => 'License Number',
            'advert_ref_number' => 'Advert Ref Number',
            'percentage' => 'Percentage',
            'building_type_id' => 'Building Type ID',
            'reference_no' => 'Reference No',
            'payer_name' => 'Payer Name',
            'cancelled_by' => 'Cancelled By',
            'cancelled_date_time' => 'Cancelled Date Time',
            'cancelled_amount' => 'Cancelled Amount',
        ];
    }
}
