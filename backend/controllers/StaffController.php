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

	$dataProvider->pagination->pageSize=2;
	$query = Staff::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $staff = $query->orderBy('nama_staff')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
<<<<<<< HEAD
        return $this->render('index', [
=======
     return $this->render('index', [
>>>>>>> 3802d69bae8e67ffc0e493b3b9db8dd048006f2b
          
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
{ if(yii::$app->user->can('create'))
	{
			$model = new Staff();
			$modelsStaff = [new Staff];
		if($model->load(Yii::$app->request->post()) && $model->save()){
				return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->renderAjax('create',[
					'model' => $model,
					'modelsStaff' => (empty($modelsStaff)) ? [new Staff] : $modelsStaff,
					]);
		}
	}else{throw new ForbiddenHttpException;}
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