<?php

namespace backend\controllers;

use Yii;
use common\models\Siswa;
use common\models\SiswaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use dosamigos\tableexport\ButtonTableExport;
use yii\db\ActiveRecord;
use yii\filters\AccessControl;
class SiswaController extends Controller
{
	public function behavior()
	{
		return[
                'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','update'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    ],
                    ],
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
	$searchModel = new SiswaSearch();
	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

	$dataProvider->pagination->pageSize=2;
	 $query = Siswa::find()->where(['nisn' => 1]);
    $countQuery = clone $query;
    $pages = new Pagination(['totalCount' => $countQuery->count()]);
    $models = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('index', [
           'dataProvider' => $dataProvider,
			'searchModel' => $searchModel, 
		
			          
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
	$model = new Siswa();

	if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->nisn]);
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
			return $this->redirect(['view', 'id' => $model->nisn]);
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
if (($model = Siswa::findOne($id)) !== null){
	return $model;
} else {
		throw new NotFoundHttpExeption('the requested page does not exsit');
	   }

}


}
 