<?php

namespace frontend\controllers;

use Yii;
use mPDF;
use kartik\mpdf\Pdf;
use yii\data\ActiveDataProvider;
use common\models\Dosen;
use frontend\models\DosenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * DosenController implements the CRUD actions for Dosen model.
 */
class DosenController extends Controller
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
     * Lists all Dosen models.
     * @return mixed
     */
    public function actionIndex()
    {
       $searchModel = new DosenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=10;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dosen model.
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
     * Creates a new Dosen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dosen();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kd_dosen]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Dosen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kd_dosen]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Dosen model.
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
     * Finds the Dosen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dosen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dosen::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionPdfReport() {
// Your SQL query here
        $content = $this->renderPartial('index');

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_CORE,
        // A4 paper format
        'format' => Pdf::FORMAT_A4,
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT,
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER,
        // your html content input
        'content' => $content,
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
                  
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}',
                      
        // set mPDF properties on the fly
        'options' => ['title' => 'Sistem Informasi Akademik'],
        // call mPDF methods on the fly
        'methods' => [
        'SetHeader'=>['Sistem Informasi Akademik'],
        'SetFooter'=>['{PAGENO}'],
        ]
        ]);

        /*------------------------------------*/
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');
        /*------------------------------------*/

        // return the pdf output as per the destination setting
        return $pdf->render();
        }

        public function actionPdf() {
 
            $content = $this->renderPartial('laporanhonor');
            //$html = $this->renderPartial('index');
            $stylesheet = file_get_contents('css/bootstrap.css');
            require_once(Yii::$app->basePath . "/../vendor/mpdf/mpdf/mpdf.php");
            $mpdf = new mPDF();
            $mpdf->WriteHTML($stylesheet, 1);
            $mpdf->WriteHTML($content);
            $mpdf->Output();
        }

        public function actionCoba()
        {
           // $data = \yii\helpers\ArrayHelper::map(\common\models\Dosen::find()->asArray()->all(),'id','name');
            $id = 67001;
            $data = \common\models\Dosen::find()->where(['kd_dosen' => $id])->asArray()->one();
            // echo $rating['vehicle_rating'];
            // var_dump($data);
            echo $data['nama'];


            $sql =  "select penguji_1, substr(nim,1,2)  as 'kode_progdi',count(substr(nim,1,2)) as 'jumlah'
                        from tb_ujian 
                        where penguji_1 = 67506
                        group by substr(nim,1,2);";
            $connection = \Yii::$app->db;
            $model = $connection->createCommand($sql);
            $users = $model->queryAll();
            // var_dump($users);

            foreach ($users as $v) {
                echo $v['penguji_1'];
                echo "<br />";
                echo $v['kode_progdi'];
                echo "<br />";
                echo $v['jumlah'];
            }

            $sql =  "select m.nim,m.nama,p.nama_progdi 
                    from tb_mahasiswa m
                    join progdi p on p.kd_progdi = m.progdi
                    where pembimbing_1 = 67001 or pembimbing_2 = 67001;";
            $connection = \Yii::$app->db;
            $model = $connection->createCommand($sql);
            $users = $model->queryAll();
            // var_dump($users);

            foreach ($users as $v) {
                echo $v['nim'];
                echo "<br />";
                echo $v['nama'];
                echo "<br />";
                echo $v['nama_progdi'];
            }

        }
    
}
