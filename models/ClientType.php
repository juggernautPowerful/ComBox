<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_type".
 *
 * @property integer $id_type
 * @property string $name
 *
 * @property Client[] $clients
 */
class ClientType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_type' => 'индетификатор типа клиента',
            'name' => 'наименование типа клиента',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['client_type_id_type' => 'id_type']);
    }
}
