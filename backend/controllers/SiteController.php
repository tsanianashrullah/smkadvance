<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use backend\models\SignupForm;
use backend\models\SignupSearch;
use backend\models\AuthItem;
use yii\base\InvalidParamException;
use yii\web\ForbiddenHttpException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use common\models\LoginForm;
use common\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    public function actions()
    {
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
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

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect('../web/index.php?r=site/login');
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
public function actionCreate()
{
    $model = new DynamicModel([
        'nama', 'file_id'
        ]);
 
    // behavior untuk upload file
    $model->attachBehavior('upload', [
        'class' => 'mdm\upload\UploadBehavior',
        'attribute' => 'file',
        'savedAttribute' => 'file_id' // coresponding with $model->file_id
    ]);
 
    // rule untuk model
    $model->addRule('nama', 'string')
        ->addRule('file', 'file', ['extensions' => 'jpg']);
 
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        if ($moadel->saveUploadedFile() !== false) {
            Yii::$app->session->setFlash('success', 'Upload Sukses');
        }
    }
    return $this->render('upload',['model' => $model]);
    } 
    public function actionSignup()
    {
    if(yii::$app->user->can('daftar'))
        {
        $model = new SignupForm();
            $authItems = AuthItem::find()->all();
            if ($model->load(Yii::$app->request->post())) {
                if ($user = $model->signup()) {
                        return $this->redirect('index.php?r=site/listrole');
                }
            }

            return $this->render('signup', [
                'model' => $model,
                'authItems' => $authItems,
            ]);
    }else{
        throw new ForbiddenHttpException('Halaman dibatasi Akses');
    }
 }
 public function actionSejarah(){
    return $this->render('sejarah');
 }
 public function actionListrole()
    {   
        $searchModel = new SignupSearch();
        $dataProvider = $searchModel->search(yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=10;
         return $this->render('listrole', [
            'searchModel'=> $searchModel,
            'dataProvider'=> $dataProvider,
            ]);

    }          
 public function actionRole()
 {
    $authItems = AuthItem::find()->all();
    return $this->render('role',[
        'model' => $this->findUser($id),
        'authItems' => $authItems,
        ]);

 }
    protected function findModel($id)
    {
    if (($model = SignupForm::findOne($id)) !== null){
        return $model;
    } else {
            throw new NotFoundHttpExeption('the requested page does not exsit');
           }
    }
public function actionDelete($id)
{
    if(yii::$app->user->can('delete'))
    {
        $this->findModel($id)->delete();
    return $this->goBack();
    }else{
    throw new ForbiddenHttpException( 'Delete hanya bisa dilakukan oleh administrator' );
    
    }
    
}

}