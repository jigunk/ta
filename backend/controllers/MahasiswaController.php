<?php

namespace backend\controllers;

use Yii;
use common\models\Mahasiswa;
use common\models\MahasiswaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Ujian;
use common\models\Dosen;

/**
 * MahasiswaController implements the CRUD actions for Mahasiswa model.
 */
class MahasiswaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Mahasiswa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MahasiswaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mahasiswa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mahasiswa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mahasiswa();
        $model1 = new Ujian();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['thanks', 'id' => $model->nim]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'model1' => $model1,
            ]);
        }
    }

    /**
     * Updates an existing Mahasiswa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
       
         if ($model->load(Yii::$app->request->post())) {
            $isValid = $model->validate();
            if ($isValid) {
                $model->save(false);
                return $this->redirect(['view', 'id' => $id]);
            }
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mahasiswa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Mahasiswa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mahasiswa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mahasiswa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



   public function actionUhuk() 
   {
        $modelMahasiswa = new Mahasiswa();
        $modelUjian = new Ujian(['scenario' => 'register']);

        $postData = Yii::$app->request->post();
        if ($modelUjian->load($postData) && $modelMahasiswa->load($postData) && Model::validateMultiple([$modelMahasiswa, $modelUjian])) {
          // terserah, sekarang mau diapain

        return $this->redirect(['view']);
        } else {
        return $this->render('hello', ['model' => $modelMahasiswa, 'modelUjian' => $modelUjian]);
        }
    }

}
