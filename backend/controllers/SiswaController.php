<?php

namespace backend\controllers;

use Yii;
use common\models\Siswa;
use common\models\SiswaSearch;
use common\models\SiswaSearchs;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use dosamigos\tableexport\ButtonTableExport;
use yii\db\ActiveRecord;
use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException;


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
	if(Yii::$app->user->can('view')){
		$searchModel = new SiswaSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$dataProvider->pagination->pageSize=10;
		    return $this->render('index', [
	           'dataProvider' => $dataProvider,
				'searchModel' => $searchModel, 
			]);
			}else{
				throw  new ForbiddenHttpException;

			}
		
		
	}
	public function actionView($id)
	{
	if(Yii::$app->user->can('view')){
		return $this->render('view',[
			'model' => $this->findModel($id),
			]);
		}else{
			throw  new ForbiddenHttpException;

		}
	}

	public function actionCreate()
	{
		if( Yii::$app->user->can('create'))
			{
				$model = new Siswa();


		 if ($model->load(Yii::$app->request->post())) {
	        try{
	            if($model->save()){
	                Yii::$app->getSession()->setFlash(
	                    'success','Data saved!'
	                );
				return $this->redirect(['view', 'id' => $model->nisn]);
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
			throw  new ForbiddenHttpException('Halaman yang Anda akses hanya bisa dibuka oleh user tertentu'); 
			
		}
		
	}
	public function actionUpdate($id)
	{
		if(yii::$app->user->can('update'))
		{
			$model = $this->findModel($id);

		 if ($model->load(Yii::$app->request->post())) {
	        try{
	            if($model->save()){
	                Yii::$app->getSession()->setFlash(
	                    'success','Data saved!'
	                );
				return $this->redirect(['view', 'id' => $model->nisn]);
	            }
	        }catch(Exception $e){
	            Yii::$app->getSession()->setFlash(
	                'error',"{$e->getMessage()}"
	            );
	        }
		} else {
			return $this->renderAjax('update',[
					'model' => $model,
					]);
		}
		}else{
			throw new ForbiddenHttpException('update hanya bisa dilakukan oleh administrator');
			
		}
		
	}
	public function actionDelete($id)
	{
		if(yii::$app->user->can('delete'))
		{

		$this->findModel($id)->delete();
		return $this->redirect(['index']);

		}else{
			throw new ForbiddenHttpEXception('Delete hanya bisa dilakukan oleh administrator');
			
		}
	}
	public function actionReport()
	{	
		$searchModel= new SiswaSearchs;
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
	    $query = Siswa::find();

	    $pages = new Pagination([
	    	        'defaultPageSize' => 5,
	        	    'totalCount' => $query->count(),
		        ]);

	    $models = $query->orderBy('nisn')
	            ->offset($pages->offset)
	            ->limit($pages->limit)
	            ->all();

	    return $this->render('report', [
	    	 'searchModel'=>$searchModel,
	    	 'dataProvider'=>$dataProvider,
	         'models' => $models,
	         'pages' => $pages,
	    ]);
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
 