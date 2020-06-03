<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "setor".
 *
 * @property int $id
 * @property string $unidade
 *
 * @property Pessoa[] $pessoas
 */
class Setor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unidade'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unidade' => 'NOME',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoas()
    {
        return $this->hasMany(Pessoa::className(), ['setor_id' => 'id']);
    }
}
