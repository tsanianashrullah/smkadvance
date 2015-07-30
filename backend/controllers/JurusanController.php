<?php

namespace backend\controllers;

use Yii;
use common\models\Jurusan;
use common\models\JurusanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
use dosamigos\tableexport\ButtonTableExport;

class JurusanController extends Controller
{

// ...
	public function actions()
	{
	    return [
	        // ...
	        'download' => [
	            'class' => JurusanController::className()
	        ]
	        // ...
	    ];
	}

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
{	$searchModel = new JurusanSearch();
	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
	$dataProvider->pagination->pageSize=5;

	    return $this->render('index', 
	    [
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
	if( Yii::$app->user->can('create'))
	{
	$model = new Jurusan();

	 if ($model->load(Yii::$app->request->post())) {
        try{
            if($model->save()){
                Yii::$app->getSession()->setFlash(
                    'success','Data saved!'
                );
			return $this->redirect(['view', 'id' => $model->id]);
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
	} else {
		throw new ForbiddenHttpException('Halaman yang Anda akses hanya bisa dibuka oleh user tertentu');		
	}

}
public function actionUpdate($id)
{
	if( Yii::$app->user->can('update'))
	{
		$model = $this->findModel($id);

		if($model->load(Yii::$app->request->post()) && $model->save()){
				return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('update',[
					'model' => $model,
					]);
		}
	}else{
		throw new ForbiddenHttpException('Halaman yang Anda akses hanya bisa dibuka oleh user tertentu');
		
	}

}
public function actionDelete($id)
{
	if( Yii::$app->user->can('delete'))
	{
		$this->findModel($id)->delete();
		return $this->redirect(['index']);
	}else{
	throw new ForbiddenHttpException('Halaman yang Anda akses hanya bisa dibuka oleh user tertentu');
		
	}
}

protected function findModel($id)
{
if (($model = Jurusan::findOne($id)) !== null){
	return $model;
} else {
		throw new NotFoundHttpExeption('the requested page does not exsit');
	   }

}

}