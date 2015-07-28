<?php

namespace backend\controllers;

use Yii;
use common\models\Guru;
use common\models\GuruSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use dosamigos\tableexport\ButtonTableExport;
use yii\db\ActiveRecord;

class GuruController extends Controller
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
public function actionIndex()
{	$searchModel = new GuruSearch();
	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
	$dataProvider->pagination->pageSize=2;
	 return $this->render('index', [
      	'searchModel'=> $searchModel,
		'dataProvider'=> $dataProvider,
        ]);

}
public function actionView($id)
{
	return $this->render('view',[
		'model' => $this->findModel($id),
		]);
}

public function actionCreate()
{
	if(Yii::$app->user->can('create')){
		$model = new Guru();

	 if ($model->load(Yii::$app->request->post())) {
        try{
            if($model->save()){
                Yii::$app->getSession()->setFlash(
                    'success','Data saved!'
                );
			return $this->redirect(['view', 'id' => $model->nip]);
            }
        }catch(Exception $e){
            Yii::$app->getSession()->setFlash(
                'error',"{$e->getMessage()}"
            );
        }
	} else {
		return $this->renderAjax('create',[
				'model' => $model,
				]);
	}
}else{
		throw  new ForbidenHttpException;

	}
	
}
public function actionUpdate($id)
{
	$model = $this->findModel($id);

	if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->nip]);
	} else {
		return $this->render('update',[
				'model' => $model,
				]);
	}
}
public function actionDelete($id)
{
	$this->findModel($id)->delete();
	return $this->redirect(['index']);
}

protected function findModel($id)
{
if (($model = Guru::findOne($id)) !== null){
	return $model;
} else {
		throw new NotFoundHttpExeption('the requested page does not exsit');
	   }

}

}