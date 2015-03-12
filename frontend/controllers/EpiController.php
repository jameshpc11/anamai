<?php

namespace frontend\Controllers;

use Yii;
use frontend\models\Epi;
use frontend\models\EpiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EpiController implements the CRUD actions for Epi model.
 */
class EpiController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Epi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EpiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Epi model.
     * @param string $HOSPCODE
     * @param string $PID
     * @param string $DATE_SERV
     * @param string $VACCINETYPE
     * @return mixed
     */
    public function actionView($HOSPCODE, $PID, $DATE_SERV, $VACCINETYPE)
    {
        return $this->render('view', [
            'model' => $this->findModel($HOSPCODE, $PID, $DATE_SERV, $VACCINETYPE),
        ]);
    }

    /**
     * Creates a new Epi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Epi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID, 'DATE_SERV' => $model->DATE_SERV, 'VACCINETYPE' => $model->VACCINETYPE]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Epi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $HOSPCODE
     * @param string $PID
     * @param string $DATE_SERV
     * @param string $VACCINETYPE
     * @return mixed
     */
    public function actionUpdate($HOSPCODE, $PID, $DATE_SERV, $VACCINETYPE)
    {
        $model = $this->findModel($HOSPCODE, $PID, $DATE_SERV, $VACCINETYPE);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID, 'DATE_SERV' => $model->DATE_SERV, 'VACCINETYPE' => $model->VACCINETYPE]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Epi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $HOSPCODE
     * @param string $PID
     * @param string $DATE_SERV
     * @param string $VACCINETYPE
     * @return mixed
     */
    public function actionDelete($HOSPCODE, $PID, $DATE_SERV, $VACCINETYPE)
    {
        $this->findModel($HOSPCODE, $PID, $DATE_SERV, $VACCINETYPE)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Epi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $HOSPCODE
     * @param string $PID
     * @param string $DATE_SERV
     * @param string $VACCINETYPE
     * @return Epi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($HOSPCODE, $PID, $DATE_SERV, $VACCINETYPE)
    {
        if (($model = Epi::findOne(['HOSPCODE' => $HOSPCODE, 'PID' => $PID, 'DATE_SERV' => $DATE_SERV, 'VACCINETYPE' => $VACCINETYPE])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
