<?php
namespace backend\controllers;
use backend\models\Location;
use backend\models\Offences;
use backend\models\ResourcesTransactions;
use backend\models\ResourcesType;
use backend\models\RevenueType;
use backend\models\SalesTransactions;
use backend\models\Zones;
use Yii;
use yii\data\ActiveDataProvider;

class ApiController extends \yii\rest\Controller
{

    public function actionLogin(){

        $username = !empty($_POST['username'])?$_POST['username']:'';
        $password = !empty($_POST['password'])?$_POST['password']:'';
        $response = [];

        if(empty($username) || empty($password)){
            $response = [
                'status' => 'error',
                'message' => 'username & password both are required!',
                'data' => '',
            ];
        }
        else{

            $user = \backend\models\Agent::findByUsername($username);

            if(!empty($user)){

                if($user->validatePassword($password)){
                    $response = [
                        'status' => 'success',
                        'message' => 'login successfully!',
                        'data' => [
                            'id' => $user->id,
                            'name' => $user->name,
                            'username' => $user->username,
                            'email'=>$user->email,
                            'zone_id'=>$user->zone_id,
                            'token' => $user->auth_key,
                        ]
                    ];
                }

                else{
                    $response = [
                        'status' => 'error',
                        'message' => 'wrong password !',
                        'data' => '',
                    ];
                }
            }

            else{
                $response = [
                    'status' => 'error',
                    'message' => 'user is disabled or does not exist!',
                    'data' => '',
                ];
            }
        }
        return $response;
    }

    public function actionZones(){

        return new ActiveDataProvider([
            'query' => Zones::find(),
        ]);
    }

    public function actionLocation(){

        //$location = Location::find()->all();
        //$location = ArrayHelper::map($location, 'id', 'name');
        //return $location;
        return new ActiveDataProvider([
            'query' => Location::find()

        ]);
    }


    public function actionOffences(){

        return new ActiveDataProvider([
            'query' => Offences::find()

        ]);
    }
    public function actionResources(){

        return new ActiveDataProvider([
            'query' => ResourcesType::find()

        ]);
    }

    public function actionRevenueType(){

        return new ActiveDataProvider([
            'query' => RevenueType::find()->where(['status'=>1])

        ]);
    }

    public function actionResourcesTransactions(){

        return new ActiveDataProvider([
            'query' => ResourcesTransactions::find()

        ]);
    }

    public function actionSalesTransactions(){

        $trans = !empty($_POST['trans_type'])?$_POST['trans_type']:'';
        $client = !empty($_POST['client_id'])?$_POST['client_id']:'';
        $ref = !empty($_POST['reference_no'])?$_POST['reference_no']:'';
        $amount = !empty($_POST['amount'])?$_POST['amount']:'';
        $datetime = !empty($_POST['date_time'])?$_POST['date_time']:'';
        $user = !empty($_POST['user_id'])?$_POST['user_id']:'';
        $payer = !empty($_POST['payer_name'])?$_POST['payer_name']:'';
        $zone = !empty($_POST['zone_id'])?$_POST['zone_id']:'';
        $location = !empty($_POST['location_id'])?$_POST['location_id']:'';
        $weightType = ($_POST['weight_type'])?$_POST['weight_type']:'';
        $weight = ($_POST['weight'])?$_POST['weight']:'';
        $phone= ($_POST['phone_no'])?$_POST['phone_no']:'';
        $plate = ($_POST['plate_number'])?$_POST['plate_number']:'';
        $resource= ($_POST['resource_id'])?$_POST['resource_id']:'';
        $vehicle= ($_POST['vehicle_id'])?$_POST['vehicle_id']:'';
        $route= ($_POST['route_id'])?$_POST['route_id']:'';
        $offence= ($_POST['offence_type_id'])?$_POST['offence_type_id']:'';

        $response = [];

        return $response;
    }

    protected function verbs()
    {
        return [
            'login' => ['POST'],
            'zones' => ['GET'],
            'location' => ['GET'],
            'offences' => ['GET'],
            'Resources' => ['GET'],
            'revenue-type' => ['GET'],
            'resources-transactions' => ['GET'],
            'sales-transactions' => ['POST'],
        ];
    }
}