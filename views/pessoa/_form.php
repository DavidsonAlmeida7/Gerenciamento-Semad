<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Setor;
use app\models\Perfil;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'funcao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'setor_id')->dropDownList(ArrayHelper::map(Setor::find()->orderBy(['unidade' => 'SORT_ASC'])->all(), 'id', 'unidade'), ['prompt' => '-- SELECIONE --']) ?>

    <?= $form->field($model, 'perfis')->checkboxList(ArrayHelper::map(Perfil::find()->orderBy(['nome' => 'SORT_ASC'])->all(), 'id', 'nome'), ['separator' => '</br>'])->hint('Selecione os perfis ligado à pessoa.') ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="glyphicon glyphicon-floppy-save"></i> Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
