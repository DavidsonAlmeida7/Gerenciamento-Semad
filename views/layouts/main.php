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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<i class="glyphicon glyphicon-home"></i> HOME',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => '<i class="glyphicon glyphicon-list"></i> MENU',
                'visible' => !Yii::$app->user->isGuest,
                'items' => [
                    //['label' => '<i class="glyphicon glyphicon-home"></i> HOME', 'url' => ['/site/index']],
                    ['label' => '<i class="glyphicon glyphicon-user"></i> PESSOA', 'url' => ['/pessoa']],
                    //['label' => '<i class="glyphicon glyphicon-resize-small"></i> CONEXÃO', 'url' => ['/conexao']],
                    ['label' => '<i class="glyphicon glyphicon-tasks"></i> PERFIL', 'url' => ['/perfil']],
                    ['label' => '<i class="glyphicon glyphicon-briefcase"></i> UNIDADE', 'url' => ['/setor']],
                    //['label' => 'CONTACT', 'url' => ['/site/contact']],
                ],
            ],
            Yii::$app->user->isGuest ? (
                ['label' => '<i class="glyphicon glyphicon-log-in"></i> LOGIN', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    '<i class="glyphicon glyphicon-log-in"></i> LOGOUT (' . Yii::$app->user->identity->username . ')',
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
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>