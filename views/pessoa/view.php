<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */

$this->title = $model->nome_usuario;
$this->params['breadcrumbs'][] = ['label' => 'PESSOAS', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-view">

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
            'nome_usuario',
            'login',
            'email:email',
            'funcao',
            [
                'attribute' => 'setor.unidade',
                'label' => 'UNIDADE'
            ],
        ],
    ]) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'perfil_id',
                'value' => 'perfil.nome',
                //'contentOptions' => ['class' => 'text-center'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width: 10%'],
                'template' => '{delete}',
                'buttons' => [
                    'delete' => function($url, $model) {
                        return Html::a('<i class="glyphicon glyphicon-trash"></i> Apagar', Url::to(['conexao/delete', 'id' => $model->id]), [
                            'class' => 'btn btn-danger',
                            'data-confirm' => 'Deseja realmente excluir?',
                            'data-method' => 'post'
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>

</div>
