<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $usuario
 * @property string $senha
 * @property string $auth_key
 * @property int $status
 * @property string $created_at
 * @property string $update_at
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'usuario', 'senha', 'auth_key'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
            [['nome'], 'string', 'max' => 60],
            [['email'], 'string', 'max' => 120],
            [['usuario'], 'string', 'max' => 30],
            [['senha', 'auth_key'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'usuario' => 'Usuario',
            'senha' => 'Senha',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }
}
