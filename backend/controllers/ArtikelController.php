<?php

namespace backend\controllers;

use Yii;
use backend\models\Artikel;
use backend\models\ArtikelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use dosamigos\tableexport\ButtonTableExport;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class ArtikelController extends Controller
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
{	$searchModel = new ArtikelSearch();
	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
	$dataProvider->pagination->pageSize=10;
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
		$model = new Artikel();

	 if ($model->load(Yii::$app->request->post())) {
        try{
        	$model->tgl= date('Y-m-d');
        	$imageName= $model->judul;
            $model->file=UploadedFile::getInstance($model, 'file');
            $model->file->saveAs( 'artikel/' . $imageName . '.' .   $model->file->extension );
            $model->foto = 'artikel/' . $imageName . '.' .   $model->file->extension;
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
}else{
		throw  new ForbidenHttpException;

	}
	
}
public function actionUpdate($id)
{
	if(yii::$app->user->can('update'))
	{
		$model = $this->findModel($id);

	if($model->load(Yii::$app->request->post())){

        	$imageName= $model->judul;
            $model->file=UploadedFile::getInstance($model, 'file');
            $model->file->saveAs( 'artikel/' . $imageName . '.' .   $model->file->extension );
            $model->foto = 'artikel/' . $imageName . '.' .   $model->file->extension;
            $model->save();
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
	if(yii::$app->user->can('delete'))
	{
		$this->findModel($id)->delete();
	return $this->redirect(['index']);
}else{
	throw new ForbiddenHttpException( 'Delete hanya bisa dilakukan oleh administrator' );
	
	}
	
}

protected function findModel($id)
{
if (($model = Artikel::findOne($id)) !== null){
	return $model;
} else {
		throw new NotFoundHttpExeption('the requested page does not exsit');
	   }

}
public function actionReport()
{	$searchModel = new ArtikelSearch();
	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
	$dataProvider->pagination->pageSize=10;
	 return $this->render('report', [
      	'searchModel'=> $searchModel,
		'dataProvider'=> $dataProvider,
        ]);

}

}