<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('app', 'Nav Sessions');
$this->params['breadcrumbs'][] = $this->title;
/* @var $this yii\web\View */
?>
<div class="nav-sessions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ServerComputerName',
            'Anzahl',
        ],
    ]); ?>
</div>
