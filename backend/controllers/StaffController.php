<?php
namespace backend\controllers;
use Yii;
use common\models\Staff;
use common\models\StaffSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\web\ForbiddenHttpException;
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
  if(Yii::$app->user->can('view')){
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
          ->all();     return $this->render('index',
       [
              'searchModel'=> $searchModel,
               'dataProvider'=> $dataProvider,        ]);
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
   if(yii::$app->user->can('create'))
   {
           $model = new Staff();        
           if($model->load(Yii::$app->request->post()) && $model->save()){
               return $this->redirect(['view', 'id' => $model->id]);
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
    if(yii::$app->user->can('update'))
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
   $this->findModel($id)->delete();
   return $this->redirect(['index']);
}
protected function findModel($id)
    {
    if (($model = Staff::findOne($id)) !== null){
       return $model;
    } else {
           throw new NotFoundHttpException('the requested page does not exsit');
          }
    }
}
