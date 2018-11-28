<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\SubscribeForm;
use common\models\Advert;
use yii\helpers\Json;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $this->layout = 'contact';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $this->layout = 'about';
        $subscribeForm = new SubscribeForm();
        if ($subscribeForm->load(Yii::$app->request->post()) && $subscribeForm->validate()) {
            if ($subscribeForm->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for subscribing us. We will respond to you as soon as possible.');
                $response = 'Thank you for subscribing us. We will respond to you as soon as possible.';
                $status = 'success';
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
                $response = 'There was an error sending your message.';
                $status = 'error';
            }
            return $this->render('auto', [
                        'subscribeForm' => $subscribeForm,
                        'response' => $response,
                        'status' => $status
            ]);
        } else {
            return $this->render('about', [
                        'subscribeForm' => $subscribeForm
            ]);
        }
    }

    /**
     * Displays auto list page.
     *
     * @return mixed
     */
    public function actionAutoList() {
        $this->layout = 'auto-list';
        $subscribeForm = new SubscribeForm();
        $sqlGetCars = 'SELECT * FROM advert WHERE status = \'active\' limit 10';
        $adverts = Advert::findBySql($sqlGetCars)->all();
        if ($subscribeForm->load(Yii::$app->request->post()) && $subscribeForm->validate()) {
            if ($subscribeForm->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for subscribing us. We will respond to you as soon as possible.');
                $response = 'Thank you for subscribing us. We will respond to you as soon as possible.';
                $status = 'success';
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
                $response = 'There was an error sending your message.';
                $status = 'error';
            }
            return $this->render('auto-list', [
                        'subscribeForm' => $subscribeForm,
                        'response' => $response,
                        'status' => $status,
                        'adverts' => $adverts
            ]);
        } else {
            return $this->render('auto-list', [
                        'subscribeForm' => $subscribeForm,
                        'adverts' => $adverts
            ]);
        }
    }

    /**
     * Displays auto find page.
     *
     * @return mixed
     */
    public function actionAutoFind() {
        $this->layout = 'auto-find';
        $subscribeForm = new SubscribeForm();
        $adverts = array();
        if(!empty(Yii::$app->request->get('brand_car'))){
            $sqlCarIds = 'SELECT cars.id FROM `cars`';
            if(!empty(Yii::$app->request->get('model_car'))){
                $sqlCarIds .= ' join models_car on cars.model_id = models_car.id and models_car.name = \''.Yii::$app->request->get('model_car').'\'';
            }
            $sqlCarIds .= ' WHERE mark = \''. Yii::$app->request->get('brand_car') .'\'';
            $connection = Yii::$app->getDb();
            $command = $connection->createCommand($sqlCarIds);
            $result = $command->queryAll();
            $carIds = array();
            foreach ($result as $row) {
                $carIds[] = $row['id'];
            }
            if(!empty($carIds)){
                $sqlGetAdvert = 'SELECT * FROM advert WHERE car_id in ('. implode($carIds, ',') .')';
                $adverts = Advert::findBySql($sqlGetAdvert)->all();
            }
        }
        
        if ($subscribeForm->load(Yii::$app->request->post()) && $subscribeForm->validate()) {
            if ($subscribeForm->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for subscribing us. We will respond to you as soon as possible.');
                $response = 'Thank you for subscribing us. We will respond to you as soon as possible.';
                $status = 'success';
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
                $response = 'There was an error sending your message.';
                $status = 'error';
            }
            return $this->render('auto-find', [
                        'subscribeForm' => $subscribeForm,
                        'response' => $response,
                        'status' => $status,
                        'adverts' => $adverts
            ]);
        } else {
            return $this->render('auto-find', [
                        'subscribeForm' => $subscribeForm,
                        'adverts' => $adverts
            ]);
        }
    }

    /* public function beforeAction($action){
      switch ($action->id){
      case 'about' : $this->layout = $action->id;
      break;
      default : $this->layout = 'main';
      break;
      }
      return parent::beforeAction($action);
      } */

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    public function actionStat() {
        $language = Yii::$app->language; //текущий язык
        //выводим вид соответствующий текущему языку
        return $this->render('statPages/stat-' . $language);
    }
    
    public function actionGetModelsCar($brandcar) {
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand('select models_car.name from models_car join cars on models_car.id = cars.model_id and cars.mark = \''. $brandcar .'\'');
        $result = $command->queryAll();
        return Json::encode(array('models' => $result));
    }
    
    public function beforeAction($action) {
        $this->enableCsrfValidation = ($action->id == "get-models-car")?false:true;
        return parent::beforeAction($action);
    }
    
    public function actionAdvert($id) {
        $this->layout = 'advert';
        $subscribeForm = new SubscribeForm();
        if ($subscribeForm->load(Yii::$app->request->post()) && $subscribeForm->validate()) {
            if ($subscribeForm->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for subscribing us. We will respond to you as soon as possible.');
                $response = 'Thank you for subscribing us. We will respond to you as soon as possible.';
                $status = 'success';
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
                $response = 'There was an error sending your message.';
                $status = 'error';
            }
            return $this->render('advert', [
                        'subscribeForm' => $subscribeForm,
                        'response' => $response,
                        'status' => $status
            ]);
        } else {
            return $this->render('advert', [
                        'subscribeForm' => $subscribeForm
            ]);
        }
        
    }

}
