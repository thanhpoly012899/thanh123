<?php

namespace frontend\controllers;

use Yii;
use app\models\Chitiethd;
use app\models\SearchChitiethd;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChitiethdController implements the CRUD actions for Chitiethd model.
 */
class ChitiethdController extends Controller
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
     * Lists all Chitiethd models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchChitiethd();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chitiethd model.
     * @param integer $MaHD
     * @param integer $MaSP
     * @return mixed
     */
    public function actionView($MaHD, $MaSP)
    {
        return $this->render('view', [
            'model' => $this->findModel($MaHD, $MaSP),
        ]);
    }

    /**
     * Creates a new Chitiethd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chitiethd();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MaHD' => $model->MaHD, 'MaSP' => $model->MaSP]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Chitiethd model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $MaHD
     * @param integer $MaSP
     * @return mixed
     */
    public function actionUpdate($MaHD, $MaSP)
    {
        $model = $this->findModel($MaHD, $MaSP);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MaHD' => $model->MaHD, 'MaSP' => $model->MaSP]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Chitiethd model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $MaHD
     * @param integer $MaSP
     * @return mixed
     */
    public function actionDelete($MaHD, $MaSP)
    {
        $this->findModel($MaHD, $MaSP)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Chitiethd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $MaHD
     * @param integer $MaSP
     * @return Chitiethd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($MaHD, $MaSP)
    {
        if (($model = Chitiethd::findOne(['MaHD' => $MaHD, 'MaSP' => $MaSP])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
