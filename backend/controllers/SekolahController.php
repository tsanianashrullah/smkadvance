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
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\LoginForm;
use common\models\User;
use common\models\ContactForm;
use mPDF;
use backend\models\AuthAssignment;

class SekolahController extends Controller
{
	public function behavior()
	{
		return[
		            
			'verb'=> [
				'class'=> VerbFiltes::className(),
				'actions'=>[
					'delete'=> ['post'],
					
				],
				
			],
			
		];
	}

	public function actionSarana(){
    return $this->render('sarana');
 	}

	public function actionEkskul(){
    return $this->render('ekskul');
 	}

	public function actionHubungan(){
    return $this->render('hubungan');
 	}

}