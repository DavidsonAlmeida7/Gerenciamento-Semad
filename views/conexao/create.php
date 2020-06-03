<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Conexao */

$this->title = 'Cadastrar Conexao';
$this->params['breadcrumbs'][] = ['label' => 'Conexão', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conexao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
