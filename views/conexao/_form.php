<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Pessoa;
use app\models\Perfil;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Conexao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="conexao-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'pessoa_id')->dropDownList(ArrayHelper::map(Pessoa::find()->all(), 'id', 'nome_usuario'), ['prompt' => '-- SELECIONE --']) ?>

<?= $form->field($model, 'perfil_id')->dropDownList(ArrayHelper::map(Perfil::find()->all(), 'id', 'nome'), ['prompt' => '-- SELECIONE --']) ?>

<div class="form-group">
    <?= Html::submitButton('<i class="glyphicon glyphicon-floppy-save"></i> Salvar', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
