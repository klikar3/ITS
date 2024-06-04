<?php

namespace app\controllers;

use Yii;
use app\models\NavSessions;
use app\models\NavSessionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class NavSessionsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new NavSessionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
