<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoa".
 *
 * @property int $id
 * @property string $nome_usuario
 * @property string $login
 * @property string $email
 * @property string $funcao
 * @property int $setor_id
 *
 * @property Conexao[] $conexaos
 * @property Setor $setor
 */
class Pessoa extends \yii\db\ActiveRecord
{
    public $perfis;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_usuario', 'login', 'email', 'funcao', 'setor_id'], 'required'],
            [['setor_id'], 'integer'],
            [['email'], 'email'],
            [['nome_usuario'], 'string', 'max' => 255],
            [['login', 'funcao'], 'string', 'max' => 45],
            [['setor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Setor::className(), 'targetAttribute' => ['setor_id' => 'id']],
            [['perfis'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_usuario' => 'NOME',
            'login' => 'LOGIN',
            'email' => 'E-MAIL',
            'funcao' => 'FUNÇÃO',
            'setor_id' => 'UNIDADE',
            'perfis' => 'PERFIS'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConexao()
    {
        return $this->hasMany(Conexao::className(), ['pessoa_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSetor()
    {
        return $this->hasOne(Setor::className(), ['id' => 'setor_id']);
    }
}
