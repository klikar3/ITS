<?php

namespace app\controllers;

use Yii;
use yii\helpers\Arrayhelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\RzReport;
use app\models\RzReportSearch;

/**
 * RzReportController implements the CRUD actions for RzReport model.
 */
class RzReportController extends Controller
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
     * Lists all RzReport models.
     * @return mixed
     */
    public function actionIndex()
    {
//        $rzSysteme = ArrayHelper::map(\app\models\RzSysteme::find()->asArray()->all(), 'System', 'System');
        $rzSysteme = ArrayHelper::map(\app\models\RzSysteme::find()->all(), 'System', 'System');
        $rzKunden = ArrayHelper::map(\app\models\RzKunden::find()->all(), 'Kunde', 'Kunde');
        $rzStandorte = ArrayHelper::map(\app\models\RzStandorte::find()->all(), 'Standort', 'Standort');
        Yii::Warning(\yii\helpers\VarDumper::dumpAsString($rzKunden, 10, false),'application');   

        $searchModel = new RzReportSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider, 
            'rzSysteme' => $rzSysteme, 
            'rzKunden' => $rzKunden, 
            'rzStandorte' => $rzStandorte,
        ]);
    }

    /**
     * Displays a single RzReport model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RzReport model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RzReport();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Rid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RzReport model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Rid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RzReport model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RzReport model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return RzReport the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RzReport::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
