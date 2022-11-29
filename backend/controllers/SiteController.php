<?php
namespace backend\controllers;

use backend\models\User;
use backend\models\UserLoginDetails;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\HttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $login=new UserLoginDetails();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $login->login_user_id=$_POST['LoginForm']['username'];
            $login->login_status = 1;
            $login->last_login_at = new \yii\db\Expression('NOW()');
            $login->user_ip_address=$_SERVER['REMOTE_ADDR'];
            $login->save();
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function getToken($token)
    {
        //$model=User::model()->findByAttributes(['token'=>$token]);
       $model=User::findByPasswordResetToken(['token'=>$token]);
        if($model===null)
            throw new HttpException(404,'The requested page does not exist.');
        return $model;
    }

    public function actionVerToken($token)
    {
        $model=$this->getToken($token);
        if(isset($_POST['Ganti']))
        {
            if($model->token==$_POST['Ganti']['tokenhid']){
                $model->password=md5($_POST['Ganti']['password']);
                $model->token="null";
                $model->save();
                Yii::$app->user->setFlash('ganti','<b>Password has been successfully changed! please login</b>');
                $this->redirect('?r=site/login');
                $this->refresh();
            }
        }
        $this->render('verify-password',[
            'model'=>$model,
        ]);
    }

    public function actionForgot()
    {
        $getEmail=$_POST['Lupa']['email'];
        $getModel= User::findByEmail(['email'=>$getEmail]);
        if(isset($_POST['Lupa']))
        {
            $getToken=rand(0, 99999);
            $getTime=date("H:i:s");
            $getModel->token=md5($getToken.$getTime);
            $namaPengirim="Owner Jsource Indonesia";
            $emailadmin="nelsonjoshua301@gmail.com";
            $subjek="Reset Password";
            $setpesan="you have successfully reset your password<br/>
                    <a href='http://localhost/halmashauri-mis/index.php?r=site/vertoken/view&token=".$getModel->token."'>Click Here to Reset Password</a>";
            if($getModel->validate())
            {
                $name='=?UTF-8?B?'.base64_encode($namaPengirim).'?=';
                $subject='=?UTF-8?B?'.base64_encode($subjek).'?=';
                $headers="From: $name <{$emailadmin}>\r\n".
                    "Reply-To: {$emailadmin}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-type: text/html; charset=UTF-8";
                $getModel->save();
                Yii::$app->user->setFlash('forgot','link to reset your password has been sent to your email');
                mail($getEmail,$subject,$setpesan,$headers);
                $this->refresh();
            }

        }
       // $this->render('forgot');
       return $this->render('forgot', [
            'model' => $getModel,
       ]);
    }
}
