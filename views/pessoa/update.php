<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */

$this->title = 'ATUALIZAR PESSOA: ' . $model->nome_usuario;
$this->params['breadcrumbs'][] = ['label' => 'PESSOAS', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome_usuario, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'ATUALIZAR';
?>
<div class="pessoa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
