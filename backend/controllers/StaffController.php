<?php

namespace backend\controllers;

use Yii;
use common\models\Staff;
use common\models\StaffSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\filters\VerbFilter;
use yii\data\Pagination;


class StaffController extends Controller
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
{
	$searchModel = new StaffSearch();
	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

	$query = Staff::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $staff = $query->orderBy('nama_staff')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'staff' => $staff,
            'pagination' => $pagination,
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
	$model = new Staff();

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
if (($model = Staff::findOne($id)) !== null){
	return $model;
} else {
		throw new NotFoundHttpExeption('the requested page does not exsit');
	   }

}


}