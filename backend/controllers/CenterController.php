<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

class CenterController extends Controller
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

	public function actionData()
	{
		if(Yii::$app->user->can('viewer')){
			return $this->render('data');
		}else{
			throw new ForbiddenHttpException("Halaman Diabatasi hak akses");
			
		}
	}
}