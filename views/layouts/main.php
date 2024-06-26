<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
     				['label'=>'RZ-Report', 'url'=>['rzReport/index'],'listOptions'=>['class'=>'RzReport'], 'items' => [
                  ['label'=>'RZ-Report verwalten', 'url'=>['/rz-report/']],
                  ['label'=>'Neuer Eintrag', 'url'=>['/rz-report/create', 'view'=>'new']],
                  ['label'=>'Systeme verwalten', 'url'=>['/rz-systeme/']],
                  ['label'=>'Kunden verwalten', 'url'=>['/rz-kunden/']],
                  ['label'=>'Standorte verwalten', 'url'=>['/rz-standorte/']],
                  ['label'=>'Kernzeiten verwalten', 'url'=>['/rz-kernzeiten/']],
                  ['label'=>'Feiertage verwalten', 'url'=>['/rz-feiertage/']],
                  ['label'=>'KeyUser verwalten', 'url'=>['/rz-key-user/']],
                  ['label'=>'KomponentenTypen verwalten', 'url'=>['/rz-komponent-typ/']],
                  ['label'=>'SystemKomponenten verwalten', 'url'=>['/rz-komponenten/']],
                  ['label'=>'Komponent-System-Zuordnung verwalten', 'url'=>['/rz-service-komponenten/']],
                  ['label'=>'SLAs verwalten', 'url'=>['/rz-sla/']],
                  ['label'=>'SLA-Zeiten verwalten', 'url'=>['/rz-sla-zeiten/']],
                  ]],
    				['label'=>'IT-Warehouse', 'url'=>['/site/index'],'linkOptions'=>['class'=>'IT-Warehouse'], 'items' => [
                  ['label'=>'IT-Warehouse', 'url'=>['/site/index', 'view'=>'list']],
                  ['label'=>'Konfiguration', 'url'=>['/site/config', 'view'=>'new']],
                  ]],
    				['label'=>'NavAdmin', 'url'=>['/navSecondTier/'],'linkOptions'=>['class'=>'NavAdmin'], 'items' => [
                  ['label'=>'Second-Tiers verwalten', 'url'=>['/nav-second-tier/']],
                  ['label'=>'Sessions anzeigen', 'url'=>['/nav-sessions/']],
                  ]],
                  ['label'=>'IT-Warehouse', 'url'=>['/site/index', 'view'=>'list']],
    				['label'=>'Interflex', 'url'=>['/Interflex/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; VSA IT-Services <?= date('Y') ?></p>

        <p class="pull-right">Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>&nbsp;<?= Yii::getVersion() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
