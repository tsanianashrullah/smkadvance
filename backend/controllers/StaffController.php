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
	if(yii::$app->user->can('create'))
	{
			$model = new Staff();
<<<<<<< HEAD
			$modelsStaff = [new Staff];
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
=======

		if($model->load(Yii::$app->request->post()) && $model->save()){
				return $this->redirect(['view', 'id' => $model->id]);
>>>>>>> 64cf5ecf3c1da932f8c8fc99f4f06c16bdf81838
		} else {
			return $this->renderAjax('create',[
					'model' => $model,
					]);
		}
	}else{
		throw new ForbiddenHttpException;
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