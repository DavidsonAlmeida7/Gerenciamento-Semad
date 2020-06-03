<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Conexao */

$this->title = $model->pessoa->nome_usuario;
$this->params['breadcrumbs'][] = ['label' => 'Conexão', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conexao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-refresh"></i> Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-trash"></i> Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza de que deseja excluir este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => 'Pessoa',
                'attribute' => 'pessoa.nome_usuario'
            ],
            [
                'label' => 'Perfil',
                'attribute' => 'perfil.nome'
            ],
        ],
    ]) ?>

</div>
