<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jogada".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $pontuacao
 * @property string $data_hora
 */
class Jogada extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jogada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'pontuacao', 'data_hora'], 'required',
            'message'=>'Este campo é obrigatório'],
            [['id_user', 'pontuacao'], 'integer'],
            [['data_hora'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'pontuacao' => 'Pontuação',
            'data_hora' => 'Data Hora',
        ];
    }
}
