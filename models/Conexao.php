<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conexao".
 *
 * @property int $id
 * @property int $pessoa_id
 * @property int $perfil_id
 *
 * @property Perfil $perfil
 * @property Pessoa $pessoa
 */
class Conexao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conexao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pessoa_id', 'perfil_id'], 'required'],
            [['pessoa_id', 'perfil_id'], 'integer'],
            [['perfil_id'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['perfil_id' => 'id']],
            [['pessoa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['pessoa_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pessoa_id' => 'PESSOA',
            'perfil_id' => 'PERFIL',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfil()
    {
        return $this->hasOne(Perfil::className(), ['id' => 'perfil_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa()
    {
        return $this->hasOne(Pessoa::className(), ['id' => 'pessoa_id']);
    }
}
