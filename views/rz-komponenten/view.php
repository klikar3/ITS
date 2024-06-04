<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\rzKomponenten */

$this->title = $model->devicename;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Komponente'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-komponenten-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'typ',
            'devicename',
            'service',
            'desc',
        ],
    ]) ?>

</div>
