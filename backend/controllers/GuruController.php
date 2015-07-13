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

	$query = Guru::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $guru = $query->orderBy('nama_guru')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
        'guru' => $guru,
        'pagination' => $pagination,
        'searchModel'=> $searchModel,
		'dataProvider'=> $dataProvider,
        ]);

}
public function actionView($nip)
{
	return $this->render('view',[
		'model' => $this->findModel($nip),
		]);
	 




}

public function actionCreate()
{
	$model = new Guru();

	if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->nip]);
	} else {
		return $this->renderAjax('create',[
				'model' => $model,
				]);
	}
}
public function actionUpdate($nip)
{
	$model = $this->findModel($nip);

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

protected function findModel($nip)
{
if (($model = Guru::findOne($nip)) !== null){
	return $model;
} else {
		throw new NotFoundHttpExeption('the requested page does not exsit');
	   }

}

}