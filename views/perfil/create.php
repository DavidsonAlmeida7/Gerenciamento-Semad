<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perfil */

$this->title = 'CADASTRAR PERFIL';
$this->params['breadcrumbs'][] = ['label' => 'PERFIL', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
