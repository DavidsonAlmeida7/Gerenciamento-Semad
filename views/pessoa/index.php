<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Setor;
use app\models\Perfil;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PessoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'PESSOAS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Cadastrar Pessoa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nome_usuario',
            //'login',
            //'email:email',
            'funcao',
            [
                'attribute' => 'setor_id',
                'value' => 'setor.unidade',
                'filter' => ArrayHelper::map(Setor::find()->orderBy(['unidade' => 'SORT_ASC'])->all(), 'id', 'unidade'),
                //'headerOptions' => ['class' => 'text-center'],
                //'contentOptions' => ['class' => 'text-center']
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
