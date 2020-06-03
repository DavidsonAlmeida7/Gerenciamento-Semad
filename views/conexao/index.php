<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Pessoa;
use app\models\Perfil;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConexaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Conexão';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conexao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Cadastrar Conexão', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'pessoa_id',
                'value' => 'pessoa.nome_usuario',
                'filter' => ArrayHelper::map(Pessoa::find()->all(), 'id', 'nome_usuario')
            ],
            [
                'attribute' => 'perfil_id',
                'value' => 'perfil.nome',
                'filter' => ArrayHelper::map(Perfil::find()->all(), 'id', 'nome')
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width: 23%'],
                'buttons' => [
                    'view' => function($url, $model) {
                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i> Ver', $url, ['class' => 'btn btn-default']);
                    },
                    'update' => function($url, $model) {
                        return Html::a('<i class="glyphicon glyphicon-pencil"></i> Editar', $url, ['class' => 'btn btn-primary']);
                    },
                    'delete' => function($url, $model) {
                        return Html::a('<i class="glyphicon glyphicon-trash"></i> Apagar', $url, [
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
