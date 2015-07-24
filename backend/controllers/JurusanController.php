<?php

namespace backend\controllers;

use Yii;
use common\models\Jurusan;
use common\models\JurusanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use dosamigos\tableexport\ButtonTableExport;

class JurusanController extends Controller
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
{	$searchModel = new JurusanSearch();
	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

	   $dataProvider->pagination->pageSize=10;
	

	$dataProvider->pagination->pageSize=2;
	$query = Jurusan::find();

        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);
        $guru = $query->orderBy('jurusan')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
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
	$model = new Jurusan();

	if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->id]);
	} else {
		return $this->renderAjax('create',[
				'model' => $model,
				]);
	}
}
public function actionUpdate($id)
{
	$model = $this->findModel($id);

	if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->id]);
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
if (($model = Jurusan::findOne($id)) !== null){
	return $model;
} else {
		throw new NotFoundHttpExeption('the requested page does not exsit');
	   }

}

}