<?php

namespace frontend\controllers;

use Yii;
use common\models\Ujian;
use frontend\models\UjianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
use common\models\Mahasiswa;
use yii\helpers\ArrayHelper;
/**
 * UjianController implements the CRUD actions for Ujian model.
 */
class UjianController extends Controller
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
     * Lists all Ujian models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UjianSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=5;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single Ujian model.
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
     * Creates a new Ujian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ujian();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nim]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ujian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nim]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ujian model.
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
     * Finds the Ujian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ujian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ujian::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionJadwalUjian()
    {
        // $sql =      Yii::$app->db->createCommand('
        //             SELECT * FROM tb_mahasiswa
        //             ')->queryScalar(); 

        $sql = "select u.nim,m.nama,m.no_telp,m.judul,d1.nama as 'Penguji 1', d2.nama as 'Penguji 2' , concat(tanggal,'',jam_mulai,'-',jam_selesai) as ' Jadwal', u.ruang from tb_ujian u 
                join tb_mahasiswa m on u.nim = m.nim 
                join tb_dosen d1 on u.penguji_1 = d1.kd_dosen
                join tb_dosen d2 on u.penguji_2 = d2.kd_dosen";
                
        $dataProvider = new SqlDataProvider([
                    'sql' => $sql,
                    //'totalCount' => $count,
                    ]);
             return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    
   }

   