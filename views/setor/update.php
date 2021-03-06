<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Setor */

$this->title = 'ATUALIZAR UNIDADE: ' . $model->unidade;
$this->params['breadcrumbs'][] = ['label' => 'UNIDADE', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->unidade, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'ATUALIZAR';
?>
<div class="setor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
