<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Conexao */

$this->title = 'Atualizar Conexão: ' . $model->pessoa->nome_usuario;
$this->params['breadcrumbs'][] = ['label' => 'Conexão', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pessoa->nome_usuario, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="conexao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
